<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
        //
        /**
    * Get the authenticated User
    *
    * @return [json] user object
    */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function register(Request $request)
    {

        

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if($request->hasFile('avatar')) {
            // Get filename with the extension
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images'), $imageName);
            $request->merge(['avatar' => $imageName]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => $request->avatar
        ]);
        
        Log::info('User Created:', $user->toArray());

        return response()->json([
            'message' => 'Successfully created user!'
        ], 200);
    }

    public function login(Request $request)
    {

        Log::info('Login Request:', $request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::error('Validation Failed:', $validator->errors()->toArray());
            return response()->json($validator->errors(), 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            Log::error('Unauthorized Access Attempt:', $request->only('email'));
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        try {
            $token = $user->createToken('authToken')->accessToken;
        } catch (\Exception $e) {
            Log::error('Token Creation Failed:', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Internal Server Error'], 500);
        }

        return response()->json(['access_token' => $token, 'token_type' => 'Bearer'], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json(['message' => 'Tokens revoked'], 200);
    }
}
