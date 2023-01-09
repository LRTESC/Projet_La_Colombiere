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
            'lname' => fake('fr_FR')->lastName,
            'fname' => fake('fr_FR')->firstName,
            'username' => fake('fr_FR')->userName,
            'mail' => fake('fr_FR')->email,
            'password' => fake()->password,
            'phonenumber' => fake('fr_FR')->phoneNumber,
            'birthday' => fake('fr_FR')->date(),
        ];
    }
}
