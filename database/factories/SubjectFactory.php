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
        return [
            'name' => fake()->randomElement(['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Bahasa Inggris', 'Bahasa Indonesia', 'Sejarah', 'Geografi', 'Ekonomi', 'Seni Budaya', 'Olahraga']),
        ];
    }
}
