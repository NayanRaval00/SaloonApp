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
        Barber::updateOrCreate(
            ['email' => 'barber@example.com'], // Unique Identifier
            [
                'name' => 'Master Barber',
                'password' => Hash::make('password123'),
                'mobile_number' => '9876543210',
                'status' => 1
            ]
        );
    }
}
