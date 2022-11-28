<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show()
    {
//            return view("product-list",['css' => 'product-list']);
        $products = DB::select('select * from Product where idProduct <= ?',[8]);
        return view('product-list', [
            'css' => 'product-list',
            'products' => $products
        ]);
    }
    public function id(Product $id)
    {
            return view("product-details",[
                'id' => $id,
                'css' => 'product-details'
            ]);
    }
}
