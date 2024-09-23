<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\socialite\GoogleController;
use App\Http\Controllers\socialite\FacebookController;
use App\Http\Controllers\register\AdminRegisterController;
use App\Http\Controllers\frontend\MainController;
use App\Http\Controllers\frontend\NavController;
use Illuminate\Foundation\Http\Kernel;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/index', [MainController::class, 'index'])->name('index');

});

Route::middleware(['admin'])->group(function () {



});

Route::get('/index', [MainController::class, 'index'])->name('index');
Route::get('/shop', [NavController::class, 'shop'])->name('shop');
Route::get('/product/{id}', [NavController::class, 'product'])->name('product-details');




require __DIR__.'/register.php';
require __DIR__.'/frontend.php';
require __DIR__.'/backend.php';
require __DIR__.'/socialite.php';