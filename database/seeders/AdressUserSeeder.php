<?php

namespace Database\Seeders;

use App\Models\AdressUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdressUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdressUser::factory(6)->create();
    }
}
