<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceSlots;
use App\Models\Slots;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

        $slots = ['10:00-11:00', '11:00-12:00', '12:00-01:00', '01:00-02:00', '02:00-03:00', '03:00-04:00', '04:00-05:00', '05:00-06:00', '06:00-07:00', '07:00-08:00', '08:00-09:00', '09:00-10:00'];

        foreach ($slots as $slot) {
            Slots::create([
                'slot_time' => $slot,
                'status' => 1
            ]);
        }
    }
}
