<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeChamber>
 */
class TypeChamberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array= ['standad','luxe',' suite'];
        return [
            'typeChamber'=>fake()->randomElement($array),
            'price'=>fake()->randomFloat(1, 80, 200),
        ];
    }
}
