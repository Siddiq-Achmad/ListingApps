<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\LoginHistory;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\PersonalAccessToken;
use Larinfo;



class UserProfileController extends Controller
{
    //
    // Menampilkan profil pengguna

    public function index()
    {
        $user = Auth::user();
        //return response()->json($user);
        return view('users.profile', compact('user'));
    }
    public function show()
    {
        $user = Auth::user();
        //return response()->json($user);
        $histories = $user->loginHistories->sortByDesc('created_at')->take(5);

        
        return view('users.profile-settings', compact('user', 'histories'));
    }
    
 


    public function updateProfile(Request $request)
    {
        //dd($request->all());
        $userId = Auth::id();
        $user = User::with('detail')->find($userId);

        try {
            // Validasi data
            $request->validate([
                'f_name' => 'required|string|max:255',
                'l_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:255',
                'city' => 'nullable|string|max:255',
                'country' => 'nullable|string|max:255',
                'zip' => 'nullable|string|max:255',
                'skills' => 'nullable|string|max:255',
                'designation' => 'nullable|string|max:255',
                'website' => 'nullable|string|max:255',
                'biography' => 'nullable|string|max:255',
                'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                // validasi lain yang diperlukan
            ]);

            // Upload avatar jika ada
            if($request->hasFile('avatar')) {
                // Get filename with the extension
                $imageName = time().'.'.$request->avatar->extension();
                $request->avatar->move(public_path('images/users'), $imageName);
                $avatar = $imageName; 
            }
            else {
                $avatar = $user->avatar;
            }
    
            // Update data user
            $user->update([
                'email' => $request->email,
                'avatar' => $avatar,
            ]);

            // Update data user detail
            $detail = $user->detail;
            if(!$detail) {
                $detail = new UserDetail;
                $detail->user_id = $user->id;
                $detail->f_name = $request->f_name;
                $detail->l_name = $request->l_name;
                $detail->phone = $request->phone;
                $detail->city = $request->city;
                $detail->country = $request->country;
                $detail->zip = $request->zip;
                $detail->skills = $request->skills;
                $detail->designation = $request->designation;
                $detail->website = $request->website;
                $detail->biography = $request->biography;
                $detail->save();
            }
            else{
                $detail->update([
                    'f_name' => $request->f_name,
                    'l_name' => $request->l_name,
                    'phone' => $request->phone,
                    'city' => $request->city,
                    'country' => $request->country,
                    'zip' => $request->zip,
                    'skills' => $request->skills,
                    'designation' => $request->designation,
                    'website' => $request->website,
                    'biography' => $request->biography,
                ]);
            }
    
            return response()->json(['message' => 'Profile updated successfully'], 200);
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Profile update error: ', ['error' => $e->getMessage()]);
    
            return response()->json(['message' => 'Something went wrong'], 500);
        }
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }

    public function changeEmail(Request $request, $id)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
        ]);
        $user = User::find($id);
        $user->email = $request->get('email');
        $user->update();
        if ($user) {
            Session::flash('message', 'Email updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Email updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }
}
