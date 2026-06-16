<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth'])->group(function () {
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('/admin');
});
});

Route::get('auth/register', function () {
    return view('auth.register');
});
Route::post('/auth/register', [RegisterController::class,'register'])->name('register');
Route::get('auth/login', function () {
    return view('auth.login');
});
Route::post('/auth/login', [LoginController::class,'login'])->name('login');

Route::get('/users-form', function () {
    return view('/users.users');
});
Route::get('/users-form', [RegisterController::class,'index']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/auth/login');
})->name('logout');