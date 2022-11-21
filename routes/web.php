<?php

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
Route::get('/',[HomeController::class, 'show']);

/* Product */
Route::get('/product',[ProductController::class, 'show']);

/* Product ID */
Route::get('/product/{id}',[ProductController::class, 'id']);

/* Cart */
Route::get('/cart',[CartController::class, 'show']);
