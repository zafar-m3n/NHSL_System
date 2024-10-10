<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicine;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicine::create([
            'name' => 'Aspirin',
            'description' => 'Pain reliever and anti-inflammatory',
            'quantity' => 200,
            'price' => 5.99,
            'expiry_date' => '2024-12-31',
        ]);

        Medicine::create([
            'name' => 'Amoxicillin',
            'description' => 'Antibiotic used to treat bacterial infections',
            'quantity' => 100,
            'price' => 10.50,
            'expiry_date' => '2025-01-15',
        ]);

        Medicine::create([
            'name' => 'Ibuprofen',
            'description' => 'Pain reliever and fever reducer',
            'quantity' => 500,
            'price' => 8.75,
            'expiry_date' => '2024-10-20',
        ]);

        Medicine::create([
            'name' => 'Lisinopril',
            'description' => 'Used to treat high blood pressure',
            'quantity' => 300,
            'price' => 12.99,
            'expiry_date' => '2025-03-10',
        ]);

        Medicine::create([
            'name' => 'Metformin',
            'description' => 'Used to treat type 2 diabetes',
            'quantity' => 150,
            'price' => 15.00,
            'expiry_date' => '2025-05-18',
        ]);
    }
}
