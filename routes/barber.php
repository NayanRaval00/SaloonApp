<?php

use App\Http\Controllers\Barber\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Barber\BarberController;
use App\Http\Controllers\Barber\BarberOrderController;
use App\Http\Controllers\Barber\BestOffersController;
use App\Http\Controllers\Barber\CategoryController;
use App\Http\Controllers\Barber\CouponController;
use App\Http\Controllers\Barber\ServiceController;
use App\Http\Controllers\Users\OrderController;
use App\Models\BestOffers;

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
    Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('barber.service.edit');
    Route::post('/update-service/{service}', [ServiceController::class, 'update'])->name('barber.service.update');
    Route::delete('/barber/service/{id}', [ServiceController::class, 'destroy'])->name('barber.service.delete');


    /**Order Management */
    Route::get('/order-list', [OrderController::class, 'barberOrders'])->name('barber.order.list');

    /**Coupon Management */
    Route::get('/coupons', [CouponController::class, 'index'])->name('barber.coupons.index');
    Route::get('/coupons/create', [CouponController::class, 'create'])->name('barber.coupons.create');
    Route::post('/coupons', [CouponController::class, 'store'])->name('barber.coupons.store');
    Route::get('/coupons/{coupon}/edit', [CouponController::class, 'edit'])->name('barber.coupons.edit');
    Route::put('/coupons/{coupon}', [CouponController::class, 'update'])->name('barber.coupons.update');
    Route::delete('/coupons/{coupon}', [CouponController::class, 'destroy'])->name('barber.coupons.destroy');

    /**Barber Profile */
    Route::get('/barber/profile', [BarberController::class, 'edit'])->name('barber.profile.edit');
    Route::post('/barber/profile', [BarberController::class, 'update'])->name('barber.profile.update');


    /**Chart */
    Route::get('/orders/chart-data', [BarberOrderController::class, 'getBarberChartData']);
    Route::post('/update-notification-count/{order_item_id}', [BarberOrderController::class, 'updateNotification'])->name('update-notification-count');

    /**Best Offer Of The Day */
    Route::resource('best-offer-day', BestOffersController::class);

    /**User Management */
    Route::get('list-users', [BarberController::class,'listUsers'])->name('barber.list.users');
    
});
