<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrayValues = [1,2,3,4,5];
        $arrayValuesChamber = [1,2,3,4,5,6,7,8,9,10];

        return [
            'title_fr_comment'=> fake()->name(),
            'title_ang_comment'=> fake()->name(),
            'describe_fr_comment' => fake()->paragraph,
            'describe_ang_comment' => fake()->paragraph,
            'rating'=> fake()->numberBetween(1, 5),
            'fk_Users_Comments'=> fake()->randomElement($arrayValuesChamber),
            'fk_Chambers_Comments'=> fake()->randomElement($arrayValues),
        ];
    }
}


/**   $table->id();
$table->string('title_fr_comment',80);
$table->longText('describe_fr_comment');
$table->string('title_ang_comment', 80);
$table->integer('rating')->nullable();
$table->timestamps(); */
