<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dateStart'=>fake()->date('1995-02-25'),
            'dateEnd'=>fake()->date('1995-02-28'),
            'nb_Person'=>2,
            'nb_chamber' =>1,
            'totalServices'=>3,
        ];
    }
}
