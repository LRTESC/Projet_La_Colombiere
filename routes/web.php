<?php

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

/* old version
Route::get('/', function () {
//    return view('welcome');
    return view("m_new_page");
});*/

/* Home */
Route::get('/', function () {
    return view("homepage");
});

/* Product */
Route::get('/product', function () {
    return view("product-list");
});

/* Product ID */
Route::get('/product/{id}', function ($id) {
    return view("product-details",[
        'id' => $id
    ]);
})->whereNumber('id');

/* Cart */
Route::get('/cart', function () {
    return view("cart");
});
