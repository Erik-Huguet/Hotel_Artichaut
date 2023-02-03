<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
        $arrayValues = [1, 2, 3];

        return [
            'lastname' => fake()->lastname(),
            'firstname'=> fake()->firstName(),
            'pseudo'=> fake()->randomLetter(),
            'email' => fake()->unique()->safeEmail(),
            'phone'=> fake()->phoneNumber(10),
            'avatar_user'=> fake()->emoji(),
            'password'=> fake()->password(10,20), // password
            'fk_Users_Roles'=> fake()->randomElement($arrayValues),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
