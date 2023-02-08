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
        TypeChamber::factory(3)->create();
    }
}
