<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Barber\BarberController;
use App\Http\Controllers\Users\OrderController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');


Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home'])->name('admin.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    /**User Management */
    Route::get('/users-list', [AdminController::class, 'listUsers'])->name('admin.user.list');


    /** Barber Management */
    Route::get('/barbers-list', [AdminController::class, 'listBarbers'])->name('admin.barber.list');
    Route::post('/update-status', [AdminController::class, 'updateStatus'])->name('admin.barbers.updateStatus');
    Route::get('/create-barber', [BarberController::class, 'createBarberPage'])->name('admin.barbers.create');
    Route::post('/save-barber', [BarberController::class, 'create'])->name('admin.barbers.save');


    /**Category Management */
    Route::get('/category-list', [CategoryController::class, 'list'])->name('admin.category.list');
    Route::get('/create-category', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/save-category', [CategoryController::class, 'save'])->name('admin.category.save');


    /**Service  Management*/
    Route::get('/service-list', [ServiceController::class, 'list'])->name('admin.service.list');
    Route::get('/create-service', [ServiceController::class, 'create'])->name('admin.service.create');
    Route::post('/save-service', [ServiceController::class, 'save'])->name('admin.service.save');

    /**Order Management */
    Route::get('/order-list', [OrderController::class, 'adminOrders'])->name('admin.order.list');
    Route::post('/order-approve{orderId}', [OrderController::class, 'approveOrder'])->name('admin.orders.approve');
});
