<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create([
            'name' => 'Formule demie-pension',
            'price' => 20,
        ]);

        Services::create([
            'name' => 'Formule pension complète',
            'price' => 35,
        ]);

        Services::create([
            'name' => 'Formule petit déjeuner',
            'price' => 9,
        ]);

        Services::create([
            'name' => 'Service Pressing',
            'price' => 30,
        ]);

        Services::create([
            'name' => 'Télévision',
            'price' => 10,
        ]);

        Services::create([
            'name' => 'Wifi',
            'price' => 25,
        ]);
    }
}
