<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderAddress;

class CartDetailsController extends Controller
{

    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('backend.main-pages.cart-details', compact('users'));
    }

    // Display the user's cart data in a separate page
    public function showUserCart($id)
    {
        $users = User::all(); // Fetch all users for the dropdown
        $selectedUser = User::findOrFail($id); // Fetch the selected user
        $cartItems = Cart::where('user_id', $id)
            ->with('product') // Ensure this relationship is loaded
            ->get();
        // Fetch the user's orders along with the related order items and products
        $orders = Order::where('user_id', $id)
            ->with('orderItems') // Load order items
            ->get();

        $address = OrderAddress::where('user_id', $id)
            ->get();

        return view('backend.main-pages.user-data', compact('users', 'selectedUser', 'cartItems', 'orders', 'address'));
    }


    // Example method where you might want to redirect to the user's cart
    public function someAction(Request $request)
    {
        // Assuming you have the user's ID after some processing
        $userId = $request->user()->id;

        // Redirect to the user's cart
        return redirect()->route('cart.user', ['id' => $userId]);
    }
}
