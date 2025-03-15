<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Barber\BarberController;

    Route::get('/dashboard', [BarberController::class, 'home'])->name('barber.home');
    // Route::get('/profile', [BarberController::class, 'profile'])->name('barber.profile');
