<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\PersonalAccessToken;

class LoginHistoryController extends Controller
{
    //
    public function index()
    {
        //
        $loginHistory = LoginHistory::all();
        return view('auth.login-history', compact('loginHistory'));
    }

    public function logoutDevice($id)
    {
        //
        $loginHistory = LoginHistory::find($id);

        if ($loginHistory && $loginHistory->user_id === auth()->id()) {
            // Hapus session dari device lain
            Session::getHandler()->destroy($loginHistory->session_id);

            // Hapus token dari device lain
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
}
