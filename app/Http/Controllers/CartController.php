<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $cart = Cart::query()
            ->where([
                'id' => $request->cookie('cart_id')
            ])
            ->with(['products'])
            ->first();

        return view('cart', [
            'css' => 'cart',
            'cart' => $cart
        ]);
    }

    public function add(Request $request, $id)
    {
        $cookie = $request->cookie('cart_id');

        if (is_null($cookie)) {
            $cart = new Cart([
                'user_id' => null
            ]);
            if ($cart->save()) {
                $cookie = cookie('cart_id', $cart->id, 60 * 24 * 7);
            }
        }

        // 2. ajouter porduits a cart_product //


        return redirect('cart')->cookie($cookie);
    }


}
