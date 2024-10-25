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


    public function logoutDevice($id)
    {
        $loginHistory = LoginHistory::find($id);

        if ($loginHistory && $loginHistory->user_id === auth()->id()) {
            // Hapus session dari device lain
            Session::getHandler()->destroy($loginHistory->session_id);

            $token = PersonalAccessToken::findToken($loginHistory->token);
            if ($token) {
                $token->delete();
            }


            // Hapus riwayat login
            $loginHistory->delete();

            return redirect()->back()->with('success', 'Berhasil logout dari device lain.');
        }

        return redirect()->back()->with('error', 'Gagal logout dari device.');
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
                'joining_date' => 'nullable|date',
                'city' => 'nullable|string|max:255',
                'country' => 'nullable|string|max:255',
                'zip' => 'nullable|string|max:255',
                'skills' => 'nullable|string|max:255',
                'designation' => 'nullable|string|max:255',
                'website' => 'nullable|string|max:255',
                'biography' => 'nullable|string|max:255',
                'avatar' => 'image|mimes:jpg,jpeg,png|max:2048',
                // validasi lain yang diperlukan
            ]);

            // Upload avatar jika ada
            if ($request->hasFile('avatar')) {
                // Get filename with the extension
                $imageName = time() . '.' . $request->avatar->extension();
                $request->avatar->move(public_path('images/users'), $imageName);
                $avatar = $imageName;
            } else {
                $avatar = $user->avatar;
            }

            // Update data user
            $user->update([
                'email' => $request->email,
                'avatar' => $avatar,
            ]);

            // Update data user detail
            $detail = $user->detail;
            if (!$detail) {
                $detail = new UserDetail;
                $detail->user_id = $user->id;
                $detail->f_name = $request->f_name;
                $detail->l_name = $request->l_name;
                $detail->phone = $request->phone;
                $detail->city = $request->city;
                $detail->country = $request->country;
                $detail->zip = $request->zip;
                $detail->skills = $request->skills;
                $detail->joining_date = $request->joining_date;
                $detail->designation = $request->designation;
                $detail->website = $request->website;
                $detail->biography = $request->biography;
                $detail->save();
            } else {
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
                    'joining_date' => $request->joining_date,
                ]);
            }

            return response()->json(['message' => 'Profile updated successfully'], 200);
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Profile update error: ', ['error' => $e->getMessage()]);

            return response()->json(['message' => 'Something went wrong'], 500);
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|confirmed',
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'success' => false,
                'message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->get('password'));
            $user->update();

            return response()->json([
                'success' => true,
                'message' => "Password updated successfully!"
            ], 200); // Status code
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
            return response()->json([
                'isSuccess' => true,
                'Message' => "Email updated successfully!"
            ], 200); // Status code here
        } else {
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }
}
