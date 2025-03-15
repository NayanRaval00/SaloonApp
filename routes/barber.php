<?php

use App\Http\Controllers\Barber\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Barber\BarberController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('barber.login');
Route::post('/login', [AuthController::class, 'login'])->name('barber.login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('barber.register');
Route::post('/register', [AuthController::class, 'register'])->name('barber.register');

Route::middleware(['barber'])->group(function () {
    Route::get('/dashboard', [BarberController::class, 'home'])->name('barber.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('barber.logout');
});
