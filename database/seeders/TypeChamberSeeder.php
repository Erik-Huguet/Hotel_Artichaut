<?php

namespace Database\Seeders;

use App\Models\TypeChamber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeChamberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeChamber::create(['typeChamber'=>'standard','price'=>fake()->randomFloat(1, 80, 200)]);
        TypeChamber::create(['typeChamber'=> 'luxe', 'price'=>fake()->randomFloat(1, 80, 200)]);
        TypeChamber::create(['typeChamber'=>'suite', 'price'=>fake()->randomFloat(1, 80, 200)]);

    }
}
