<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class BddSS extends Controller
{
    public function id($id)
    {
        return view("Product",['id' => $id, 'css' => 'Product']);
    }
}

public function run(){

    $faker Faker/Factory::create()

    for ($i=0; $i < 6; $i++) {
        Product;;create([
            'title' => $faker->sentence(15)
            'slug' => $faker ->sentence(15)
            'subtitle' => $faker -> sentence(15)
            'description' => $faker -> sentence(15)
            'price' => $faker -> sentence(15)

        ])

    }
}
