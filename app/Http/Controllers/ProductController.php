<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('product-list', [
            'css' => 'product-list',
            'products' => Product::query()->with('category')->get()
        ]);
    }

    public function show(Product $id)
    {
        return view("product-details", [
            'id' => $id,
            'css' => 'product-details'
        ]);
    }
}
