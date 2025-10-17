<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $patients = User::where('role', 'patient')->get();
        $doctors = User::where('role', 'doctor')->get();

        foreach ($patients as $patient) {
            for ($i = 0; $i < 2; $i++) {
                $doctor = $doctors->random();

                Question::create([
                    'patient_id' => $patient->id,
                    'doctor_id' => $doctor->id,
                    'title' => fake()->sentence(5),
                    'body' => fake()->paragraph(),
                    'is_public' => fake()->boolean(),
                    'status' => 'answered',
                ]);
            }
        }
    }
}
