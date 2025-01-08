<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Auth\UmkmRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;


Route::get('/about', fn () => view('about'));
// Route::get('/', action: Controllers\HomeController::class);
Route::get('/',[HomeController::class,'index'])->name('dashboard');
Route::get('/products', action: Controllers\ProductsController::class);


// Register
Route::get('/register-user', [UserRegisterController::class, 'showRegistrationForm'])->name('register-user')->middleware('guest');
Route::post('/register-user', [UserRegisterController::class, 'register'])->middleware('guest');
Route::get('/register-umkm', [UmkmRegisterController::class, 'showRegistrationForm'])->name('register-umkm')->middleware('guest');
Route::post('/register-umkm', [UmkmRegisterController::class, 'register'])->middleware('guest');
Route::get('/login', fn () => view('auth.login'))->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

