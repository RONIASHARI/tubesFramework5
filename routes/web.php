<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/newAccount', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/newAccount', [AuthController::class, 'register'])->name('register.store');
Route::post('/api/register', [AuthController::class, 'register']);
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('barangg', BarangController::class);
Auth::routes();

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');
