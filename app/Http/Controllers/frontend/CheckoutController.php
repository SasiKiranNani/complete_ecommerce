<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Category;
use App\Models\OrderAddress;
use Illuminate\Support\Str; // Correct the import here
use Razorpay\Api\Api;
use Auth;
use Illuminate\Support\Facades\Session;
use Exception;

class CheckoutController extends Controller
{
    public function render()
    {
        $categories = Category::with('brands.products')->get();
        $orderAddress = OrderAddress::where('user_id', Auth::id())->get();
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        return view('frontend.main-pages.checkout', compact('categories', 'orderAddress', 'cartItems'));
    }

    public function makePayment(Request $request)
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $paymentMethod = $request->payment_method;
            $orderTotal = $request->input('order_total');
    
            if ($paymentMethod == 'cod') {
                // Create a new Order
                $order = new Order();
                $order->user_id = $userId;
                $order->address_id = $request->input('address_id');
                $order->payment_method = $paymentMethod;
                $order->order_total = $orderTotal;
                $order->payment_id = 'pay_' . Str::random(14);
                $order->order_id = 'order_' . Str::random(14);
                $order->save();
    
                // Save cart items to the order
                $cartItems = Cart::with('product')->where('user_id', $userId)->get();
                foreach ($cartItems as $cartItem) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_image' => $cartItem->product->product_image,
                        'product_name' => $cartItem->product->product_name,
                        'quantity' => $cartItem->quantity,
                        'price' => $cartItem->price,
                    ]);
                }
    
                Cart::where('user_id', $userId)->delete();
                return redirect('orderSuccess');
            } else {
                $receiptId = Str::random(20);
    
                $api = new Api(config('services.razorpay.key_id'), config('services.razorpay.key_secret'));
                $order = $api->order->create([
                    'receipt' => $receiptId,
                    'amount' => $request->order_total * 100,
                    'currency' => 'INR',
                ]);
    
                $response = [
                    'orderID' => $order['id'],
                    'razorpayId' => config('services.razorpay.key_id'),
                    'amount' => $request->order_total * 100, // Amount in paise
                    'currency' => 'INR',
                    'address_id' => $request->address_id,
                    'payment_method' => $paymentMethod, 
                    'order_total' => $request->order_total, // Ensure this key is included
                ];
                
                return view('frontend.main-pages.payment-page', compact('response'));
            }
        } else {
            return redirect()->route('login');
        }
    }
    

    public function complete(Request $request)
    {
        $signature = $request->input('razorpay_signature');
        $paymentId = $request->input('razorpay_payment_id');
        $orderId = $request->input('razorpay_order_id');
    
        // Verify the signature to ensure payment authenticity
        $status = $this->signatureVerify($signature, $paymentId, $orderId);
    
        if (Auth::check()) {
            $userId = Auth::id();
            $paymentMethod = $request->input('payment_method');
            $orderTotal = $request->input('order_total');
            $addressId = $request->input('address_id');
    
            if ($status == true) {
                // Create new order after successful payment
                $order = new Order();
                $order->user_id = $userId;
                $order->address_id = $addressId;
                $order->payment_method = $paymentMethod;
                $order->order_total = $orderTotal;
                $order->payment_id = $paymentId; // Store the actual Razorpay payment ID
                $order->order_id = $orderId; // Store the actual Razorpay order ID
                $order->save();
    
                // Save cart items to the order
                $cartItems = Cart::with('product')->where('user_id', $userId)->get();
                foreach ($cartItems as $cartItem) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_image' => $cartItem->product->product_image,
                        'product_name' => $cartItem->product->product_name,
                        'quantity' => $cartItem->quantity,
                        'price' => $cartItem->price,
                    ]);
                }
    
                // Clear the user's cart
                Cart::where('user_id', $userId)->delete();
                return redirect('orderSuccess');
            } else {
                return view('frontend.main-pages.fail');
            }
        }
    }
    
    

    private function signatureVerify($_signature, $_paymentId, $_orderId)
    {
        try {
            $api = new Api(config('services.razorpay.key_id'), config('services.razorpay.key_secret'));
            $attributes = [
                'razorpay_order_id' => $_orderId,
                'razorpay_payment_id' => $_paymentId,
                'razorpay_signature' => $_signature
            ];
            $api->utility->verifyPaymentSignature($attributes);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function orderSuccess()
    {
        $categories = Category::with('brands.products')->get();
        return view('frontend.main-pages.order-success', compact('categories'));
    }
}
