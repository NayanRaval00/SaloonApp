<?php

use App\Http\Controllers\Users\AuthController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('users.home');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('users.login');
Route::post('/login', [AuthController::class, 'login'])->name('users.login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('users.register');
Route::post('/register', [AuthController::class, 'register'])->name('users.register.data');