<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Database\Factories\AdvantageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advantage::factory(4)->create();
    }
}
