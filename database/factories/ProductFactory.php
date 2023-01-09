<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Database\Seeders\CategoriesSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'name' => fake()->word,
            'description' => fake()->sentence,
            'price' => fake()->randomFloat(2, 0, 2000),
            'available' => fake()->boolean,
            'category_id' => function () {
                return self::factoryForModel('Category')->create()->id;
            }
        ];
    }
}
