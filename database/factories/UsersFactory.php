<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lname'=>fake()->lastName,
            'fname'=>fake()->firstName,
            'username'=>fake()->userName,
            'mail'=>fake()->email,
            'phonenumber'=>fake()->phoneNumber,
            'birthday'=>fake()->date(),
        ];
    }
}
