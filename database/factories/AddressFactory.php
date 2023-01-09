<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Address>
 */
class AddressFactory extends Factory
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
            'company' => fake('fr_FR')->company,
            'address' => fake('fr_FR')->address,
            'additional' => fake()->sentence,
            'zipcode' => fake('fr_FR')->postcode(),
            'city' => fake('fr_FR')->city,
            'country' => fake('fr_FR')->country,
        ];
    }
}
