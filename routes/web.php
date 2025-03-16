<?php

use App\Http\Controllers\Users\AuthController;
use App\Http\Controllers\Users\CartController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('users.home');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('users.login');
Route::post('/login', [AuthController::class, 'login'])->name('users.login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('users.register');
Route::post('/register', [AuthController::class, 'register'])->name('users.register.data');

Route::get('/list-saloons', [UserController::class, 'listSaloons'])->name('users.saloons.list');
Route::get('/list-service/{barber_id}', [UserController::class, 'listsServiceByBarber'])->name('users.service.list');

Route::middleware(['user'])->group(function () {
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('users.add.cart');
    Route::get('/view-cart', [CartController::class, 'view'])->name('cart.view');
});
