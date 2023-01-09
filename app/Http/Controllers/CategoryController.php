<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::query()->get();
        return view('category-list', [
            'css' => 'category-list',
            'categories' => $categories
        ]);
    }
    public function show(Category $id)
    {
        return view("category-details",[
            'css' => 'category-details',
            'id' => $id
        ]);
    }
}
