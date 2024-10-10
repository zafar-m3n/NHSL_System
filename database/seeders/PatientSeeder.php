<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed 5 patients into the database
        Patient::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'date_of_birth' => '1985-05-15',
            'email' => 'john.doe@example.com',
            'phone_number' => '555-1234',
            'address' => '123 Main St, Springfield',
            'appointment_history' => json_encode([
                ['date' => '2023-01-15', 'reason' => 'Routine checkup'],
                ['date' => '2023-06-10', 'reason' => 'Follow-up consultation'],
            ]),
            'medical_history' => json_encode([
                ['condition' => 'Hypertension', 'diagnosed' => '2020-04-15'],
                ['condition' => 'Diabetes', 'diagnosed' => '2021-08-22'],
            ]),
            'insurance_provider' => 'HealthCare Inc.',
            'emergency_contact' => 'Jane Doe - 555-5678'
        ]);

        Patient::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'date_of_birth' => '1990-11-21',
            'email' => 'jane.smith@example.com',
            'phone_number' => '555-5678',
            'address' => '456 Elm St, Springfield',
            'appointment_history' => json_encode([
                ['date' => '2023-02-10', 'reason' => 'Allergy testing'],
                ['date' => '2023-07-05', 'reason' => 'Skin rash'],
            ]),
            'medical_history' => json_encode([
                ['condition' => 'Asthma', 'diagnosed' => '2015-07-11'],
            ]),
            'insurance_provider' => 'Wellness Health',
            'emergency_contact' => 'John Smith - 555-9876'
        ]);

        Patient::create([
            'first_name' => 'Michael',
            'last_name' => 'Johnson',
            'date_of_birth' => '1978-02-11',
            'email' => 'michael.johnson@example.com',
            'phone_number' => '555-9876',
            'address' => '789 Oak St, Springfield',
            'appointment_history' => json_encode([
                ['date' => '2023-03-12', 'reason' => 'Back pain'],
            ]),
            'medical_history' => json_encode([
                ['condition' => 'Arthritis', 'diagnosed' => '2019-03-10'],
            ]),
            'insurance_provider' => 'MediCare Plus',
            'emergency_contact' => 'Sarah Johnson - 555-6543'
        ]);

        Patient::create([
            'first_name' => 'Emily',
            'last_name' => 'Davis',
            'date_of_birth' => '2000-12-25',
            'email' => 'emily.davis@example.com',
            'phone_number' => '555-6543',
            'address' => '101 Maple St, Springfield',
            'appointment_history' => json_encode([
                ['date' => '2023-04-08', 'reason' => 'Annual physical'],
            ]),
            'medical_history' => json_encode([
                ['condition' => 'Allergy', 'diagnosed' => '2022-06-15'],
            ]),
            'insurance_provider' => 'Green Shield Health',
            'emergency_contact' => 'Mark Davis - 555-4321'
        ]);

        Patient::create([
            'first_name' => 'Robert',
            'last_name' => 'Brown',
            'date_of_birth' => '1988-09-30',
            'email' => 'robert.brown@example.com',
            'phone_number' => '555-4321',
            'address' => '202 Pine St, Springfield',
            'appointment_history' => json_encode([
                ['date' => '2023-05-10', 'reason' => 'Eye examination'],
                ['date' => '2023-08-21', 'reason' => 'Dental cleaning'],
            ]),
            'medical_history' => json_encode([
                ['condition' => 'High cholesterol', 'diagnosed' => '2018-12-05'],
            ]),
            'insurance_provider' => 'BlueCross',
            'emergency_contact' => 'Laura Brown - 555-8765'
        ]);
    }
}
