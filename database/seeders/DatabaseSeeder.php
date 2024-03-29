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
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            DiscountSeeder::class,
            InfoNewsSeeder::class,
            PictureSeeder::class,
            AdvantageSeeder::class,
            ChamberSeeder::class,
            CommentSeeder::class,
            VideoSeeder::class,
            TypeChamberSeeder::class,
            ReservationSeeder::class,
            InvoiceSeeder::class,
            AddressSeeder::class,
            ServicesSeeder::class,
            FooterSeeder::class,

        ]);


    }
}

