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
        $timestamp = now();

        // Create a user
        $user = User::create([
            'name' => 'Aaron Mangan',
            'email' => 'azza.mangan@gmail.com',
            'password' => bcrypt('azza.mangan@gmail.com'),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
            'email_verified_at' => $timestamp,
        ]);
        echo "User was created";
    }
}
