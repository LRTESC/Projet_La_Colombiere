<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{

    public function index()
    {
        $addresses = Address::query()->get();
        return view('address-list', [
            'css' => 'address-list',
            'addresses' => $addresses
        ]);
    }

    public function show(Address $id)
    {
        return view("address-details", [
            'id' => $id,
            'css' => 'address-details'
        ]);
    }
}
