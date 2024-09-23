<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        // Ensure you also delete associated carts if necessary
        $user->carts()->delete();
        
        $user->delete();

        return redirect()->route('cart.index')->with('success', 'User and associated cart deleted successfully.');
    }
}

