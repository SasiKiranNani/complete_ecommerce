<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\socialite\GoogleController;
use App\Http\Controllers\socialite\FacebookController;

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






});

Route::middleware(['admin'])->group(function () {


});


// Google Auth Routes
Route::get('auth/google', [GoogleController::class, 'googlepage'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback'])->name('googlecallback');

// Facebook Auth Routes
Route::get('auth/facebook', [FacebookController::class, 'facebookpage'])->name('auth.facebook');
Route::get('auth/facebook/callback', [FacebookController::class, 'facebookcallback'])->name('facebookcallback');