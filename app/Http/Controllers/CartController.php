<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cart_product;
use App\Models\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

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

    public function add(Request $request, $productid)
    {
        $cookie = $request->cookie('cart_id');

        if (is_null($cookie)) {
            $cart = new Cart([
                'user_id' => auth()->user()->id,
            ]);

            if ($cart->save()) {
                $cookie = cookie('cart_id', $cart->id, 60 * 24 * 7);
            }
        }

        // 2. ajouter porduits a cart_product//

        $cart = Cart::query()->find($cookie);

        $product = Product::query()->find($productid);

        $cart_products = Cart_product::query()->where('cart_id', '=', $cart->id)->orderBy('updated_at')->get();

        if ($cart_products->isEmpty()) {
            $order = new Cart_product();
            $order->cart_id = $cart->id;
            $order->product_id = $product->id;
            $order->quantity = 1;
            $order->price = $product->price;
            $order->save();
        } else {
            $isNew = true;
            foreach ($cart_products as $cart_product) {
                if ($cart_product->product_id == $productid) {
                    $isNew = false;
                    if ($cart_product->product_id == $productid) {
                        $cart_product->quantity += 1;
                        $cart_product->save();
                    }
                }
            }
            if ($isNew) {
                $order = new Cart_product();
                $order->cart_id = $cart->id;
                $order->product_id = $product->id;
                $order->quantity = 1;
                $order->price = $product->price;
                $order->save();
            }
        }

        return redirect('cart')->cookie($cookie);
    }


}
