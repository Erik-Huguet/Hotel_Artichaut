<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
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
            'title_fr_new'=> fake()->name(),
            'describe_fr_new' => fake()->paragraph,
            'title_ang_new'=> fake()->name(),
            'describe_ang_new' => fake()->paragraph,
            'icon_new' =>fake()->imageUrl($width = 640, $height = 480),
            'position_icon_new' =>fake()->randomDigit(),
            'fk_Users_News' =>fake()->randomElement($arrayValues),
        ];
    }
}
