<?php

namespace Database\Seeders;

use App\Models\Barber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $barber= Barber::updateOrCreate(
            ['email' => 'barber@example.com'], // Unique Identifier
            [
                'name' => 'Master Barber',
                'saloon_name' => 'Master Saloon',
                'city' => 'Test',
                'state' => 'Test State',
                'country' => 'Test Country',
                'password' => Hash::make('password'),
                'mobile_number' => '9876543210',
                'status' => 1
            ]
        );
        $barber->syncRoles(['barber']); 
    }
}
