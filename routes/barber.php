<?php

use App\Http\Controllers\Barber\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Barber\BarberController;
use App\Http\Controllers\Barber\CategoryController;
use App\Http\Controllers\Barber\ServiceController;
use App\Http\Controllers\Users\OrderController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('barber.login');
Route::post('/login', [AuthController::class, 'login'])->name('barber.login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('barber.register');
Route::post('/register', [AuthController::class, 'register'])->name('barber.register');

Route::middleware(['barber'])->group(function () {
    Route::get('/dashboard', [BarberController::class, 'home'])->name('barber.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('barber.logout');


    /**Category Management */
    Route::get('/category-list', [CategoryController::class, 'list'])->name('barber.category.list');
    Route::get('/create-category', [CategoryController::class, 'create'])->name('barber.category.create');
    Route::post('/save-category', [CategoryController::class, 'save'])->name('barber.category.save');


    /**Service  Management*/
    Route::get('/service-list', [ServiceController::class, 'list'])->name('barber.service.list');
    Route::get('/create-service', [ServiceController::class, 'create'])->name('barber.service.create');
    Route::post('/save-service', [ServiceController::class, 'save'])->name('barber.service.save');

    /**Order Management */
    Route::get('/order-list', [OrderController::class, 'barberOrders'])->name('barber.order.list');
});
