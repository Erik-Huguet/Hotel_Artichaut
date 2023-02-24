<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrayValues = [1,2,3,4,5,6,7,8,9,10];

        return [
            'title_fr_discount'=> fake()->name(),
            'title_ang_discount'=> fake()->name(),
            'describe_fr_discount' => fake()->paragraph,
            'describe_ang_discount' => fake()->paragraph,
            'code_discount' => fake()->randomFloat(),
            'fk_Users_Discounts'=> fake()->randomElement($arrayValues),
        ];
    }
}
