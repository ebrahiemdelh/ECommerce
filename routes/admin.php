<?php

use App\Http\Controllers\Admin\{AuthController, ProductController, CategoryController, OrderController, StoreController, UserController, VendorController};
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        // 'middleware' => ['auth', 'is_admin'],
    ],
    function () {
        Route::view('/home', 'admin.pages.index')->name('dashboard');

        Route::middleware(['guest'])->group(function () {
            Route::view('/login', 'admin.pages.auth.login')->name('login')->middleware('guest');
            Route::post('/login', [AuthController::class, 'login'])->name('login');
            Route::view('/register', 'admin.pages.auth.register')->name('register')->middleware('guest');
            Route::post('/register', [AuthController::class, 'register'])->name('register');
        });

        Route::middleware(['auth', 'admin'])->group(function () {
            Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
            Route::resources([
                'products' => ProductController::class,
                'categories' => CategoryController::class,
                'orders' => OrderController::class,
                'stores' => StoreController::class,
                'users' => UserController::class,
                'vendors' => VendorController::class,
            ]);
        });
    }
);
