<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['type_role'=>'admin']);
        Role::create(['type_role'=> 'super_admin']);
        Role::create(['type_role'=>'user_customer']);
    }
}
