<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\TypeChamber::factory(3)->create();

        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            DiscountSeeder::class,
            NewsSeeder::class,
            PictureSeeder::class,
            AdvantageSeeder::class,
            ChamberSeeder::class,
            CommentSeeder::class,
            VideoSeeder::class,

        ]);


    }
}

