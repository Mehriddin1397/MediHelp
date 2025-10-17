<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@medihelp.uz',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_doctor' => false,
        ]);

        // Shifokorlar
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Shifokor $i",
                'email' => "doctor$i@medihelp.uz",
                'password' => Hash::make('password'),
                'role' => 'doctor',
                'is_doctor' => true,
            ]);
        }

        // Bemorlar
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => "Bemor $i",
                'email' => "patient$i@medihelp.uz",
                'password' => Hash::make('password'),
                'role' => 'patient',
                'is_doctor' => false,
            ]);
        }
    }
}
