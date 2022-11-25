<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->withFaker()->words(2,true),
            'description'=> $this ->withFaker()->sentence(2,true),
            'price' => $this->withFaker()->randomFloat(2,0,99)
        ];
    }
}
