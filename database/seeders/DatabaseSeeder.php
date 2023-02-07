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

        \App\Models\Video::factory(1)->create();
        \App\Models\TypeChamber::factory(3)->create();
        \App\Models\Role::factory(3)->create();
        \App\Models\Picture::factory(10)->create();
        \App\Models\News::factory(10)->create();
        \App\Models\Discount::factory(4)->create();
        \App\Models\Comment::factory(10)->create();
        \App\Models\Chamber::factory(37)->create();
        \App\Models\Advantage::factory(4)->create();

        $this->call([
            UserSeeder::class,
        ]);


       // \App\Models\user::factory(10)->create();
        // \App\Models\user::factory()->create([
        //     'name' => 'Test user',
        //     'email' => 'test@example.com',
        // ]);
    }
}

