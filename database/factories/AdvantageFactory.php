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
        return [
            'title_fr'=> fake()->name(),
            'title_ang'=> fake()->name(),
            'describe_fr' => fake()->paragraph,
            'describe_ang' => fake()->paragraph,
            'icon_adv' => 'https://i.ytimg.com/vi/DBsW9bQhWy8/maxresdefault.jpg',
            'position_icon_adv' => fake()->randomDigit(),
        ];
    }
}
