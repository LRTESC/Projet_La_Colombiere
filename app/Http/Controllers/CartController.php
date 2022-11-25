<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function show()
    {
        $id = 1;
        // raw sql queries //
        $customer = DB::selectOne('SELECT * FROM Customer WHERE idCustomer = ?', [$id]);
        $products = DB::select('
                SELECT *
                FROM cart
                INNER JOIN Order_has_Product ON Order_has_Product.Order_idOrder = cart.idOrder
                INNER JOIN Product ON Product.idProduct = Order_has_Product.Product_idProduct
                WHERE idOrder = ?
            ', [$id]);


        $totalHT = $totalTVA = 0;

        foreach ($products as $product) {
            $totalHT += $product->Price * $product->Quantity;
        }
        $totalTVA = $totalHT * .2;

//        if (! $product){
//            abort(404);
//        }

        return view("cart",['css' => 'cart', 'customer' => $customer, 'cart'
            => ['products' => $products, 'total_ht' => $totalHT, 'total_tva'
            => $totalTVA
            ]]);
    }
}
