<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpecialtySeeder extends Seeder
{
    public function run(): void
    {
        $specialties = [
            'Terapevt',
            'Kardiolog',
            'Nevropatolog',
            'Pediatr',
            'Stomatolog',
            'Dermatolog',
            'Psixiatr',
            'Oftalmolog',
            'Ginekolog',
            'Ortoped'
        ];

        foreach ($specialties as $name) {
            Specialty::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
