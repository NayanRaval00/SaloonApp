<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::updateOrCreate(['name' => 'admin','guard_name' => 'admin']);
        Role::updateOrCreate(['name' => 'barber','guard_name' => 'barber']);
        Role::updateOrCreate(['name' => 'user','guard_name' => 'web']);
    }
}
