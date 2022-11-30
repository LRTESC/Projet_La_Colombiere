<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::query()->get();
        return view('cart', [
            'css' => 'cart',
            'carts' => $carts
        ]);
    }
    public function show(Cart $id)
    {
        return view("cart-details",[
            'css' => 'cart-details',
            'id' => $id
        ]);
    }
}
