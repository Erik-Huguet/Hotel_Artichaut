<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer>
 */
class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'addressHotel' =>fake()->address(),
            'NomHotel'=>fake()->name(),
            'logoHotel'=>fake()->imageUrl($width = 640, $height = 480),
            'emailHotel'=>fake()->email(),
            'telephoneHotel'=>fake()->phoneNumber(),
            'urlFooter' =>fake()->url(),
            'fk_Footer_Users' =>fake()->randomDigit(),
        ];
    }
}
