<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\videos>
 */
class VideoFactory extends Factory
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
            'title_fr_video'=> fake()->name(),
            'title_ang_video'=> fake()->name(),
<<<<<<< HEAD
            'describe_fr_video' => fake()->paragraph,
            'describe_ang_video' => fake()->paragraph,
            'url_video' => fake()->url(),
=======
            'describe_fr' => fake()->paragraph,
            'describe_ang' => fake()->paragraph,
            'url_video' => fake()->url(),
            'fk_Users_Videos'=> fake()->randomElement($arrayValues),

>>>>>>> d9bd27d461033dbbd130b13eacbf05f3a890d960
        ];
    }
}
