<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice', [
            'css' => 'backoffice',
            'products' => Product::query()
            ->get()
        ]);
    }
}
