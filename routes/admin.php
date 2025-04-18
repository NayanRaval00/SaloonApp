<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AppointmentsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Barber\BarberController;
use App\Http\Controllers\Users\ContactUsController;
use App\Http\Controllers\Users\OrderController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');


Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home'])->name('admin.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    /**User Management */
    Route::get('/users-list', [AdminController::class, 'listUsers'])->name('admin.user.list');
    Route::get('/users-download', [AdminController::class, 'downloadUsers'])->name('admin.users.download');
    Route::delete('/user/{id}', [AdminController::class, 'destroyUser'])->name('admin.user.destroy');

    /** Barber Management */
    Route::get('/barbers-list', [AdminController::class, 'listBarbers'])->name('admin.barber.list');
    Route::post('/update-status', [AdminController::class, 'updateStatus'])->name('admin.barbers.updateStatus');
    Route::get('/create-barber', [BarberController::class, 'createBarberPage'])->name('admin.barbers.create');
    Route::post('/save-barber', [BarberController::class, 'create'])->name('admin.barbers.save');
    Route::delete('/barber/{id}', [AdminController::class, 'destroyBarber'])->name('admin.barber.destroy');

    Route::get('/barber/register/{token}', [BarberController::class, 'showRegisterForm'])->name('admin.barber.register');
    Route::post('/barber/register', [BarberController::class, 'store'])->name('barber.register.store');


    /**Category Management */
    Route::get('/category-list', [CategoryController::class, 'list'])->name('admin.category.list');
    Route::get('/create-category', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/save-category', [CategoryController::class, 'save'])->name('admin.category.save');
    Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    Route::post('/update-category', [CategoryController::class, 'update'])->name('admin.category.update');


    /**Service  Management*/
    Route::get('/service-list', [ServiceController::class, 'list'])->name('admin.service.list');
    Route::get('/create-service', [ServiceController::class, 'create'])->name('admin.service.create');
    Route::post('/save-service', [ServiceController::class, 'save'])->name('admin.service.save');
    Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('admin.service.edit');
    Route::post('/update-service/{service}', [ServiceController::class, 'update'])->name('admin.service.update');
    Route::delete('/barber/service/{id}', [ServiceController::class, 'destroy'])->name('admin.service.delete');

    /**Order Management */
    Route::get('/order-list', [OrderController::class, 'adminOrders'])->name('admin.order.list');
    Route::post('/order-approve{orderId}', [OrderController::class, 'approveOrder'])->name('admin.orders.approve');


    /**Partner Management */
    Route::get('/partners', [PartnerController::class, 'index'])->name('admin.partners.list');
    Route::post('/partners/update-status', [PartnerController::class, 'updateStatus'])->name('admin.partners.updateStatus');

    Route::get('/orders/chart-data', [AdminOrderController::class, 'getChartData']);


    /**Admin Profile */
    Route::get('/admin/profile', [AdminController::class, 'edit'])->name('admin.profile.edit');
    Route::post('/admin/profile', [AdminController::class, 'update'])->name('admin.profile.update');


    /**Contact Us */
    Route::get('/contact-us', [ContactUsController::class, 'list'])->name('admin.contact.list');
    Route::delete('/contacts/{id}', [ContactUsController::class, 'destroy'])->name('admin.contact.destroy');


    /**Appointments */
    Route::get('/appointments', [AppointmentsController::class, 'list'])->name('admin.appointment.list');
    Route::delete('/appointments/{id}', [AppointmentsController::class, 'destroy'])->name('admin.appointment.destroy');
});
