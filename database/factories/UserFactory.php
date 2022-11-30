<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
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
