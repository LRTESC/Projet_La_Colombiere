<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirectTo(){
        return redirect('/');
    }
    public function index()
    {
        return view("homepage",['css' => 'homepage',]);
    }
    public function show($page)
    {
        return view($page,['css' => $page,]);
    }
}
