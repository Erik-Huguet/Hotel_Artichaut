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
        TypeChamber::create(['typeChamber'=>'standard','price'=>70]);
        TypeChamber::create(['typeChamber'=> 'luxe', 'price'=>140]);
        TypeChamber::create(['typeChamber'=>'suite', 'price'=>280]);

    }
}
