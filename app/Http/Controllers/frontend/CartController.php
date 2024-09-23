<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Brand;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $productId = $request->input('product_id');
        $quantity = 1; // Default quantity

        // Find the product
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Check if the product is already in the cart for the logged-in user
        $cartItem = Cart::where('product_id', $product->id)
            ->where('user_id', auth()->id())
            ->first();

        if ($cartItem) {
            // If product exists in the cart, increase the quantity by 1
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // If product is not in the cart, create a new cart entry
            $cartItem = new Cart();
            $cartItem->product_id = $product->id;
            $cartItem->user_id = auth()->id(); // Assuming the user is logged in
            $cartItem->quantity = $quantity;
            $cartItem->price = $product->sale_price;
            $cartItem->save();
        }

        return response()->json(['success' => 'Product added to cart successfully!']);
    }

    // public function getCartItems()
    // {
    //     $categories = Category::with('brands.products')->get();

    //     // Fetch the cart items along with the related products for the logged-in user
    //     $cartItems = Cart::with('product')
    //         ->where('user_id', auth()->id())
    //         ->get();

    //     // Return the cart view with the cart items
    //     return view('frontend.cart', compact('cartItems', 'categories'));
    // }


    public function getCartItems()
    {
        $categories = Category::with('brands.products')->get();

        // Fetch the cart items along with the related products for the logged-in user
        $cartItems = Cart::with('product')
            ->where('user_id', auth()->id())
            ->get();

        // Calculate the cart totals
        $cartTotal = $cartItems->sum(fn($item) => $item->price * $item->quantity) + 5; // Including shipping cost

        // Store cart details in session
        session()->put('cartItems', $cartItems);
        session()->put('cartTotal', $cartTotal);

        // Return the cart view with the cart items
        return view('frontend.main-pages.cart', compact('cartItems', 'categories'));
    }



    public function updateCart(Request $request)
    {
        $request->validate([
            'quantities' => 'required|array',
            'quantities.*' => 'required|integer|min:1',
        ]);

        foreach ($request->input('quantities') as $cartItemId => $quantity) {
            $cartItem = Cart::where('id', $cartItemId)
                ->where('user_id', auth()->id())
                ->first();

            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->save();
            }
        }

        return redirect()->route('cart.view')->with('success', 'Cart updated successfully!');
    }
    public function removeFromCart($id)
    {
        $cartItem = Cart::where('id', $id)->where('user_id', auth()->id())->first();

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Product not found in cart.'], 404);
    }
}
