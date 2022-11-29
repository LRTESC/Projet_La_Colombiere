<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addresse>
 */
class AddressesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_address' => fake()->word,
            'company' => fake()->company,
            'address' => fake()->address,
            'additional' => fake()->sentence,
            'zipcode' => fake()->postcode,
            'city' => fake()->city,
            'country' => fake()->country,
        ];
    }
}
