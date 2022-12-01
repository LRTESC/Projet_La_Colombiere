<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->get();
        return view('user-list', [
            'css' => 'user-list',
            'users' => $users
        ]);
    }
    public function show(User $id)
    {
        return view("user-details",[
            'id' => $id,
            'css' => 'user-details'
        ]);
    }
}
