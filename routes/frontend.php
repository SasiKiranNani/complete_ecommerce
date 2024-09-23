<?php

// routes/frontend.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\MainController;
use App\Http\Controllers\frontend\NavController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\OrderAddressController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'getCartItems'])->name('cart.view');
    Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

    Route::get('/checkout', [CheckoutController::class, 'render'])->name('checkout');
    Route::post('/store-address', [OrderAddressController::class, 'storeAddress'])->name('storeAddress');
    Route::get('/make-payment', [CheckoutController::class, 'makePayment'])->name('make-payment');
    Route::get('orderSuccess', [CheckoutController::class, 'orderSuccess'])->name('orderSuccess');
    Route::post('/payment-complete', [CheckoutController::class, 'Complete']);
});


