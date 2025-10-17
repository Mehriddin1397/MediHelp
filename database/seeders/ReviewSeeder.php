<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $patients = User::where('role', 'patient')->get();
        $doctors = User::where('role', 'doctor')->get();

        foreach ($patients as $patient) {
            // Har bir bemor 2 ta turli shifokorni baholaydi
            $randomDoctors = $doctors->random(min(2, $doctors->count()));

            foreach ($randomDoctors as $doctor) {
                Review::create([
                    'patient_id' => $patient->id,
                    'doctor_id' => $doctor->id,
                    'rating' => rand(3, 5),
                    'comment' => fake()->sentence(8),
                ]);
            }
        }
    }
}

