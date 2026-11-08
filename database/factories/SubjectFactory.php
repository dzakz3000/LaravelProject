<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    public function definition(): array
    {
        static $index = 0;
        $subjects = [
            'Matematika', 'Fisika', 'Kimia', 'Biologi', 'Bahasa Inggris',
            'Bahasa Indonesia', 'Sejarah', 'Geografi', 'Ekonomi',
            'Seni Budaya', 'Olahraga', 'Informatika', 'Sosiologi', 'PPKn', 'Agama'
        ];

        $name = $subjects[$index % count($subjects)];
        $index++;

        return [
            'name' => $name,
        ];
    }
}
