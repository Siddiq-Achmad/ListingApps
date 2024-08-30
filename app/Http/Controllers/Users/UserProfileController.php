<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\LoginHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
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
        $id = Auth::user()->id;
        $user = User::find($id);
        dd($request->all());
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
