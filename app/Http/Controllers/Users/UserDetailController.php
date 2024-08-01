<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    //
    public function show()
    {
        $user = Auth::user();
        $detail = $user->detail;
        return response()->json($detail);
    }

    public function update(Request $request)
    {
        $request->validate([
            'f_name' => 'nullable|string|max:255',
            'l_name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'biography' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'cover_image' => 'nullable|image|max:2048',
            'dob' => 'nullable|date',
            'joining_date' => 'nullable|date',
        ]);


        $user = Auth::user();
        $detail = $user->detail ?? new UserDetail(['user_id' => $user->id]);

        $detail->fill($request->only([
            'f_name', 'l_name', 'address', 'phone', 'city', 'zip', 'country', 'skills', 'designation', 'website', 'company', 'biography', 'image', 'cover_image', 'dob', 'joining_date'
        ]));

        if ($request->hasFile('image')) {
            $detail->image = $request->file('image')->store('users', 'public');
        }

        if ($request->hasFile('cover_image')) {
            $detail->cover_image = $request->file('cover_image')->store('covers', 'public');
        }

        $detail->save();

        return response()->json(['message' => 'Profile updated successfully.', 'detail' => $detail]);
    }

}
