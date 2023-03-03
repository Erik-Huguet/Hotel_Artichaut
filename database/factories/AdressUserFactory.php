<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdressUser>
 */
class AdressUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address' =>fake()->address(),
            'postalCode' =>fake()->randomNumber(5),
            'city' => fake()->city(),
            'country' =>fake()->country(),
        ];
    }
}
