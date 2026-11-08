<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;
use App\Models\Subject;
use App\Models\Teacher;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //Subject::factory(15)->create();
        Teacher::factory(15)->create();

        $this->call(ClassroomSeeder::class);

        Classroom::factory(10)
            ->hasStudents(5)
            ->create();

        //Student::factory(20)->create();
    }
}
