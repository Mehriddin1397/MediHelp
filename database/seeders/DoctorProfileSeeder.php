<?php

namespace Database\Seeders;

use App\Models\DoctorProfile;
use App\Models\Specialty;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DoctorProfileSeeder extends Seeder
{
    public function run(): void
    {
        $specialties = Specialty::pluck('id')->toArray();

        $doctors = User::where('role', 'doctor')->get();

        foreach ($doctors as $doctor) {
            DoctorProfile::create([
                'user_id' => $doctor->id,
                'specialty_id' => Arr::random($specialties),
                'avatar_path' => 'avatars/default.png',
                'bio' => fake()->sentence(10),
                'workplace' => fake()->company(),
                'experience_years' => rand(3, 20),
                'social_links' => [
                    'facebook' => 'https://facebook.com/' . $doctor->name,
                    'instagram' => 'https://instagram.com/' . $doctor->name,
                ],
                'is_verified' => fake()->boolean(80), // 80% tasdiqlangan
            ]);
        }
    }
}
