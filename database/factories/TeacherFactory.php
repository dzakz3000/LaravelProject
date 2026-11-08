<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->numberBetween(1000000000, 9999999999),
            //'subjects' => fake()->randomElement(['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Bahasa Inggris']),
            'subject_id' => \App\Models\Subject::factory(),
            'start_date' => fake()->date(),
        ];
    }
}
