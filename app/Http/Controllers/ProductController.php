<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show()
    {
//            return view("product-list",['css' => 'product-list']);
        $product1=DB::select('select * from Product where idProduct = ?',[1]);
        $product2=DB::select('select * from Product where idProduct = ?',[3]);
        $product3=DB::select('select * from Product where idProduct = ?',[7]);

        return view('product-list', [
            'css' => 'product-list',
            'product1' => $product1,
            'product2' => $product2,
            'product3' => $product3
        ]);
    }
    public function id($id)
    {
            return view("product-details",[
                'id' => $id,
                'css' => 'product-details'
            ]);
    }
}
