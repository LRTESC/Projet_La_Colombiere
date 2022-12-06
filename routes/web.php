<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Backoffice;
use App\Http\Controllers\Backoffice\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Home */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'redirectTo'])->name('home'); // for User login purpose


/* client pages */
Route::prefix(null)->group(function () {
    /* Product */
    Route::prefix('product')->group(function () {
        Route::get(null, [ProductController::class, 'index'])->name('product');
        Route::get('{id}', [ProductController::class, 'show'])->name('productid');
    });

    /* Categories */
    Route::prefix('categories')->group(function () {
        Route::get(null, [CategoryController::class, 'index'])->name('categories');
        Route::get('{id}', [CategoryController::class, 'show'])->name('cat_id');
    });

    /* Carts */
    Route::prefix('cart')->group(function () {
        Route::get(null, [CartController::class, 'index'])->name('cart');
        Route::get('{id}', [CartController::class, 'add'])->name('cart_id');
    });

    /* Users */
    Route::prefix('users')->group(function () {
        Route::get(null, [UserController::class, 'index'])->name('users');
        Route::get('{id}', [UserController::class, 'show'])->name('user_id');
    });

    /* register */
    Route::prefix('register')->group(function () {
        Route::get(null, [RegisterController::class, 'create'])->name('register_create')->middleware('guest');
        Route::post(null, [RegisterController::class, 'store'])->name('register_store')->middleware('guest');
    });

    /* Session User */
    Route::get('login', [App\Http\Controllers\User\UserController::class, 'create'])->name('login')->middleware('guest');
    Route::post('login', [App\Http\Controllers\User\UserController::class, 'store'])->name('login_form')->middleware('guest');
    Route::post('logout', [App\Http\Controllers\User\UserController::class, 'logout'])->name('logout')->middleware('auth');
});

/* Backoffice */
Route::prefix('/backoffice')->group(function () {
    Route::get(null, [BackofficeController::class, 'index'])->name('backoffice');
    Route::get('product', [Backoffice\ProductController::class, 'index'])->name('bo_product');
});
Route::prefix('/backoffice/product')->group(function () {
    Route::get('{id}', [Backoffice\ProductController::class, 'edit'])->name('bo_p_edit');
    Route::post(null, [Backoffice\ProductController::class, 'create'])->name('bo_p_create');
    Route::post('{id}', [Backoffice\ProductController::class, 'update'])->name('bo_p_update');
    Route::delete('{id}\delete', [Backoffice\ProductController::class, 'destroy'])->name('bo_p_delete');
})->middleware('auth');
