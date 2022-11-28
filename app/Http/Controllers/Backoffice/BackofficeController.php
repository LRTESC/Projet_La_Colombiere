<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;

class BackofficeController extends Controller
{
    public function index()
    {
        return view('backoffice.dashboard.index');
    }
}
