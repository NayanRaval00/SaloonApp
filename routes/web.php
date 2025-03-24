<?php

use App\Http\Controllers\Users\AuthController;
use App\Http\Controllers\Users\CartController;
use App\Http\Controllers\Users\OrderController;
use App\Http\Controllers\Users\PartnerController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('users.home');
Route::post('/login', [AuthController::class, 'login'])->name('users.login.post');
Route::post('/register', [AuthController::class, 'register'])->name('users.register.data');


Route::middleware(['user'])->group(function () {
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('users.add.cart');
    Route::get('/view-cart', [CartController::class, 'view'])->name('cart.view');
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/order-list', [OrderController::class, 'userOrders'])->name('orders.list');
    Route::get('/order/{order}', [OrderController::class, 'show'])->name('order.details');

    Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

});

Route::group(['prefix' => 'user'], function () {
    /**User Website */
    Route::get('/home', [UserController::class, 'userWebsite'])->name('user.web.home');
    Route::get('/about-us', [UserController::class, 'aboutUs'])->name('user.web.about');
    Route::get('/services', [UserController::class, 'services'])->name('user.web.services');
    Route::get('/blogs', [UserController::class, 'blogs'])->name('user.web.blogs');
    Route::get('/portfolio', [UserController::class, 'portfolio'])->name('user.web.portfolio');
    Route::get('/contact-us', [UserController::class, 'contactUs'])->name('user.web.contact-us');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.web.login');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('user.web.register');
    Route::get('/become-a-partner', [PartnerController::class, 'becomeAPartner'])->name('user.web.partner');
    Route::post('/become-partner', [PartnerController::class, 'store'])->name('users.web.becomepartner');


    Route::get('/list-saloons', [UserController::class, 'listSaloons'])->name('users.saloons.list');
    Route::get('/list-service/{barber_id}', [UserController::class, 'listsServiceByBarber'])->name('users.service.list');
});
