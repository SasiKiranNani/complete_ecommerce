<?php
// routes/backend.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandsController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CartDetailsController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('/brands', [BrandsController::class, 'index'])->name('brands.index');
    Route::post('/brands', [BrandsController::class, 'store'])->name('brands.store');
    Route::put('/brands/{id}', [BrandsController::class, 'update'])->name('brands.update');
    Route::delete('/brands/{id}', [BrandsController::class, 'destroyBrand'])->name('brands.destroy');

    Route::post('/products', [ProductController::class, 'store'])->name('store_product');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('update_product');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('delete_product');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/brands/{category}', [BrandsController::class, 'getBrandsByCategory']);

    Route::get('/cart_details', [CartDetailsController::class, 'index'])->name('cart_details');
    Route::get('/cart/user/{id}', [CartDetailsController::class, 'showUserCart'])->name('cart.user');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
