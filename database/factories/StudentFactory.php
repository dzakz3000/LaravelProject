<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classroom;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nis' => fake()->randomNumber(5, false),
            //'classroom' => fake()->randomElement(['11 PPLG 1', '11 PPLG 2', '11 PPLG 3']),
            'classroom_id' => Classroom::factory(),
            'address' => fake()->address(),
            'major' => fake()->randomElement(['PPLG', 'DKV', 'ANIMASI']),
        ];
    }
}
