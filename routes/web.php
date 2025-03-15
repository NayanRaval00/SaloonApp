<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Barber\BarberController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home']);
