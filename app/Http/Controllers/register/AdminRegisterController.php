<?php

namespace App\Http\Controllers\register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminRegisterController extends Controller
{
    public function createAdmin(Request $request)
    {
        // Validate incoming request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Create the admin user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'admin', // Ensure role is set to 'admin'
        ]);
    
        // Redirect to a desired route with success message
        return redirect()->route('categories.index')->with('success', 'Admin created successfully');
    }
}
