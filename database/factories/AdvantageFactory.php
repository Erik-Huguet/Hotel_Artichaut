<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advantage>
 */
class AdvantageFactory extends Factory
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
            'title_fr_adv'=> fake()->name(),
            'describe_fr_adv' => fake()->paragraph,
            'title_ang_adv'=> fake()->name(),
            'describe_ang_adv' => fake()->paragraph,
            'icon_adv' => 'https://i.ytimg.com/vi/DBsW9bQhWy8/maxresdefault.jpg',
            'position_icon_adv' => fake()->randomDigit(),
            'fk_Users_advantages'=> fake()->randomElement($arrayValues),
        ];
    }
}
