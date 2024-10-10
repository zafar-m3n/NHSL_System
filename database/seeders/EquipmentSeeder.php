<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipment;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::create([
            'name' => 'X-ray Machine',
            'description' => 'Machine used to take radiographs',
            'quantity' => 5,
            'purchase_date' => '2022-06-15',
            'status' => 'Operational',
        ]);

        Equipment::create([
            'name' => 'Ultrasound Machine',
            'description' => 'Used for diagnostic imaging',
            'quantity' => 2,
            'purchase_date' => '2021-12-05',
            'status' => 'Operational',
        ]);

        Equipment::create([
            'name' => 'Surgical Lights',
            'description' => 'Used in the operating room to illuminate surgery',
            'quantity' => 10,
            'purchase_date' => '2023-01-10',
            'status' => 'Operational',
        ]);

        Equipment::create([
            'name' => 'Defibrillator',
            'description' => 'Emergency medical equipment for heart resuscitation',
            'quantity' => 3,
            'purchase_date' => '2020-08-20',
            'status' => 'Needs Maintenance',
        ]);

        Equipment::create([
            'name' => 'ECG Machine',
            'description' => 'Machine used to monitor heart activity',
            'quantity' => 4,
            'purchase_date' => '2023-05-15',
            'status' => 'Operational',
        ]);
    }
}
