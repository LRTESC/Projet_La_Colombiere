<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BDDBriceController extends Controller
{
    public function show()
    {

        return view("bdd-Brice", [
            'products' => Product::all()
        ]);
    }
    public function showName()
    {

        return view("bdd-Brice", [
            'products' => Product::all()->sortBy('name')
        ]);
    }
    public function showPrice()
    {

        return view("bdd-Brice", [
            'products' => Product::all()->sortBy('price')
        ]);
    }
}
