<?php

namespace Database\Seeders;

use App\Models\Chamber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChamberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Chamber::factory(37)->create();

        Chamber::create(['number_chamber'=>101, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>102, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>103, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>104, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>105, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>106, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>107, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>108, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>109, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>110, 'fk_Chambers_TypeChamber'=> 1]);

        Chamber::create(['number_chamber'=>201, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>202, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>203, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>204, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>205, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>206, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>207, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>208, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>209, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>210, 'fk_Chambers_TypeChamber'=> 1]);


        Chamber::create(['number_chamber'=>301, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>302, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>303, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>304, 'fk_Chambers_TypeChamber'=> 1]);
        Chamber::create(['number_chamber'=>305, 'fk_Chambers_TypeChamber'=> 1]);
    }
}
