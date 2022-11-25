<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
            return view("product-list",['css' => 'product-list']);
    }
    public function id($id)
    {
            return view("product-details",['id' => $id, 'css' => 'product-details']);
    }
}
