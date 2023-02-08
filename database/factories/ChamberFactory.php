<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chamber>
 */
class ChamberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrayValues = [101, 102, 103,104,105,106,107,108,109,110,
            201, 202, 203,204,205,206,207,208,209,210,
            301, 302, 303,304,305,
            306,307,308,111, 211,
            309,310];

        $arrayValuesType = [1,2,3];
        return [
            'number_chamber' => fake()->randomElement($arrayValues),
            'fk_Chamber_Type'=> fake()->randomElement($arrayValuesType),
        ];
    }
}
