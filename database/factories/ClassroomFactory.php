<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    protected $model = Classroom::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['11 PPLG 1', '11 PPLG 2', '11 PPLG 3', '11 DKV 1', '11 ANIMASI 1']),
            'major' => fake()->randomElement(['PPLG', 'DKV', 'ANIMASI']),
        ];
    }
}
