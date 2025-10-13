<?php

use App\Http\Controllers\Front\{ProductController, CategoryController, HomeController, UserController, CartController, CheckoutController, AuthController};
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'as' => 'front.',
        // 'prefix' => '',
        // 'middleware' => ['auth', 'is_admin'],
    ],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::middleware(['guest'])->group(function () {
            Route::view('/login', 'front.pages.auth.login')->name('login')->middleware('guest');
            Route::view('/register', 'front.pages.auth.register')->name('register')->middleware('guest');
            Route::post('/login', [AuthController::class, 'login'])->name('login');
            Route::post('/register', [AuthController::class, 'register'])->name('register');
        });

        Route::middleware(['auth'])->group(function () {
            Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
            Route::resource('/user', UserController::class)->middleware('auth');
        });

        Route::resource('/cart', CartController::class)->except(['create', 'show', 'edit']);
        Route::resources(
            [
                'products' => ProductController::class,
                'categories' => CategoryController::class,
                'checkout' => CheckoutController::class,
            ]
        );
    }
);
