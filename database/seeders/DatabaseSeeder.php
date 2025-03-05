<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('Admin@123'), // Hash the password
            'role' => 'admin', // Assign admin role
            'status' => 'active', // Ensure the account is active
            'image' => null, // Optional profile image
        ]);
    }
}
