<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->get();
        return view('product-list', [
            'css' => 'product-list',
            'products' => $products
        ]);
    }
    public function show(Product $id)
    {
            return view("product-details",[
                'id' => $id,
                'css' => 'product-details'
            ]);
    }
}
