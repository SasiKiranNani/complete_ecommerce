<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\socialite\GoogleController;
use App\Http\Controllers\socialite\FacebookController;
use App\Http\Controllers\register\AdminRegisterController;
use App\Http\Controllers\frontend\MainController;
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


});

Route::middleware(['admin'])->group(function () {


});


Route::get('/admin/register', function () {
    return view('admin.create-admin');
});
Route::post('/admin/register', [AdminRegisterController::class, 'createAdmin']);