<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDDBriceController extends Controller
{
    public function show()
    {

        return view("bdd-Brice", [
            'products'=> DB::select('select * from Product')
        ]);
    }
}
