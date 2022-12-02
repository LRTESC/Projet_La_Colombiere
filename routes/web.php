<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Backoffice;
use App\Http\Controllers\Backoffice\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

/* Product */
Route::get('/product', [ProductController::class, 'index'])->name('product');

/* Product ID */
Route::get('/product/{id}', [ProductController::class, 'show'])->name('productid');

/* Backoffice */
Route::prefix('/backoffice')
    ->group(function () {
        Route::get(null, [BackofficeController::class, 'index'])->name('backoffice');
        Route::get('product', [Backoffice\ProductController::class, 'index'])->name('bo_product');
    });
Route::prefix('/backoffice/product')->group(function () {
    Route::get('{id}', [Backoffice\ProductController::class, 'edit'])->name('bo_p_edit');
    Route::post(null, [Backoffice\ProductController::class, 'create'])->name('bo_p_create');
    Route::post('{id}', [Backoffice\ProductController::class, 'update'])->name('bo_p_update');
    Route::delete('{id}\delete', [Backoffice\ProductController::class, 'destroy'])->name('bo_p_delete');
});

/* Categories */
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('cat_id');

/* Carts */
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cart/{id}', [CartController::class, 'add'])->name('cart_id');

/* Users */

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user_id');

/* Addresses */

Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');
Route::get('/addresses/{id}', [AddressController::class, 'show'])->name('address_id');
