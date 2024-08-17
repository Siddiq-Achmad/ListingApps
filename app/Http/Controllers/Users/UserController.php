<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with('detail')->get();
        
        return view('users.index', compact('users'));
    }

    public function users()
    {
        $users = User::with('detail')->get();
        
        return response()->json($users);
    }

    // Metode untuk mendapatkan detail pengguna berdasarkan ID
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // Metode untuk membuat pengguna baru
    public function store(Request $request)
    {
        
        //dd($request->all());
       

        try {
            // Validasi input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'company' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:255',
                'f_name' => 'nullable|string|max:255',
                'l_name' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
                'dob' => 'nullable|date',
                'skills' => 'nullable|string|max:255',
                'designation' => 'nullable|string|max:255',
                'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            // Simpan avatar
            if($request->hasFile('avatar')) {
                // Get filename with the extension
                $imageName = time().'.'.$request->avatar->extension();
                $request->avatar->move(public_path('images/users'), $imageName);
                $avatar = $imageName; 
            }
            else {
                $avatar = '';
            }

            // Simpan data User
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'avatar' => $avatar
            ]);
    
            // Buat data UserDetail
            $detail = new UserDetail([
                'company' => $request->company,
                'phone' => $request->phone,
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'address' => $request->address,
                'dob' => $request->dob,
                'designation' => $request->designation,
                'skills' => $request->skills,
                'joining_date' => date('Y-m-d'),
            ]);

            Log::info('New user created: ' . $user->name);
    
            // Simpan relasi detail ke user
            $user->detail()->save($detail);
    
            // Jika berhasil
            return response()->json([
                'success' => true,
                'message' => 'User and detail saved successfully'
            ], 201);
    
        } catch (ValidationException $e) {
            // Jika validasi gagal, tangkap error dan kembalikan error dalam bentuk JSON
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
    
        } catch (\Exception $e) {
            // Tangkap semua error lainnya (misalnya error database)
            Log::error('Error saving user: ' . $e->getMessage());
    
            // Kembalikan response error
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving the user'
            ], 500);
        }

       
    }

    // Metode untuk memperbarui informasi pengguna
    public function update(Request $request, $id)
    {

        //dd($request->all());
       try {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'f_name' => 'nullable|string|max:255',
            'l_name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'skills' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
        ]);

        // Simpan avatar
        if($request->hasFile('avatar')) {
            // Get filename with the extension
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images/users'), $imageName);
            $avatar = $imageName; 
        }
        else {
            $avatar = $request->avatar;
        }

        $user = User::find($id);
        // update data User
        $user->update([
            'name' => $validated['name'],
            'avatar' => $avatar
        ]);

        // update data UserDetail
        $detail = $user->detail;
        if(!$detail) {
            $detail = new UserDetail;
            $detail->user_id = $user->id;
            $detail->company = $request->company;
            $detail->phone = $request->phone;
            $detail->f_name = $request->f_name;
            $detail->l_name = $request->l_name;
            $detail->address = $request->address;
            $detail->dob = $request->dob;
            $detail->designation = $request->designation;
            $detail->skills = $request->skills;
            $detail->joining_date = date('Y-m-d');
            $detail->save();
        }
        else{
        $detail->update([
            'company' => $request->company,
            'phone' => $request->phone,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'address' => $request->address,
            'dob' => $request->dob,
            'designation' => $request->designation,
            'skills' => $request->skills,
            'joining_date' => date('Y-m-d'),
        ]);
        }

        Log::info('User updated: ' . $user->name);
        return response()->json([
            'success' => true,
            'message' => 'User and detail updated successfully'
        ], 200);
       } catch (ValidationException $e) {
        return response()->json([
            'success' => false,
            'errors' => $e->errors()
        ], 422);
       }



    }

    // Metode untuk menghapus pengguna
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        if ($user) {
            $user->delete();
            return response()->json(['message' => 'User deleted successfully']);
        }
        else{
        return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function forceDelete($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->forceDelete();

        return response()->json(['message' => 'User deleted successfully.']);
    }

    public function restore($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();

        return response()->json(['message' => 'User restored successfully.']);
    }

}
