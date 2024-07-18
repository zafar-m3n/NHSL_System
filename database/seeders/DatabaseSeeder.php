<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'password' => bcrypt('password'),
        ]);
        User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staff@gmail.com',
            'usertype' => 'staff',
            'password' => bcrypt('password'),
        ]);
    }
}
