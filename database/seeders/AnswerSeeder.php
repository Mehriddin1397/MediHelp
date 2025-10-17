<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Savollar va shifokorlar mavjudligini tekshiramiz
        $questions = Question::all();
        $doctors = User::where('is_doctor', true)->get();

        if ($questions->isEmpty() || $doctors->isEmpty()) {
            $this->command->warn('Savol yoki shifokorlar mavjud emas. Avval Question va User seederlarini ishga tushiring.');
            return;
        }

        // Har bir savolga bitta yoki bir nechta shifokordan javob yozamiz
        foreach ($questions as $question) {
            $randomDoctors = $doctors->random(rand(1, 2)); // 1 yoki 2 ta shifokor tanlaymiz
            foreach ($randomDoctors as $doctor) {
                Answer::create([
                    'question_id' => $question->id,
                    'doctor_id' => $doctor->id,
                    'body' => fake()->paragraph(rand(2, 4)), // tasodifiy javob matni
                ]);
            }
        }

        $this->command->info('AnswerSeeder muvaffaqiyatli ishga tushdi!');
    }
}
