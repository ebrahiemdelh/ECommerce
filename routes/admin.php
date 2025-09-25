<?php

use App\Http\Controllers\Admin\{ProductController,CategoryController,OrderController,StoreController,UserController,VendorController};
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        // 'middleware' => ['auth', 'is_admin'],
    ],
    function () {
        Route::view('/home', 'admin.pages.index')->name('dashboard');
        Route::resources([
            'products' => ProductController::class,
            'categories' => CategoryController::class,
            'orders' => OrderController::class,
            'stores' => StoreController::class,
            'users' => UserController::class,
            'vendors' => VendorController::class,
        ]);
    }
);
