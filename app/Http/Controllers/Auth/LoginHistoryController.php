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

   
}
