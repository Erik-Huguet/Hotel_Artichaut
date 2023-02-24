<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Picture>
 */
class PictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrayValuesAdvantage = [1,2,3,4];
        $arrayValuesChambers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32];
        $arrayValuesDiscounts = [1,2,3,4,5];
        $arrayValuesNews = [1,2,3];


        return [
            'url_picture' =>fake()->imageUrl($width = 640, $height = 480),
            'fk_Pictures_Advantages'=> fake()->randomElement($arrayValuesAdvantage),
            'fk_Pictures_Chambers'=> fake()->randomElement($arrayValuesChambers),
            'fk_Pictures_Discounts'=> fake()->randomElement($arrayValuesDiscounts),
            'fk_Pictures_News'=> fake()->randomElement($arrayValuesNews),
        ];
    }
}
