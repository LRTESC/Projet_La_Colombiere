<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\List_;
use function Sodium\add;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::query()
            ->limit(50)
            ->get();


        return view("products.index", ['Products' => '$products']);
    }
}

