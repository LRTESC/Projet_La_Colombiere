<?php

use App\Http\Controllers\Backoffice;
use App\Http\Controllers\Backoffice\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'show'])->name('home');

/* Product */
Route::get('/product', [ProductController::class, 'show'])->name('product');

/* Product ID */
Route::get('/product/{id}', [ProductController::class, 'id'])->name('productid');

/* Cart */
Route::get('/cart', [CartController::class, 'show'])->name('cart');

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
    Route::delete('{id}\delete', [Backoffice\ProductController::class, 'delete'])->name('bo_p_delete');
});

