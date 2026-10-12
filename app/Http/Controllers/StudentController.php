<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $rawStudents = [
            ['nis' => '20260001', 'name' => 'Prabowo', 'class' => 'XI PPLG 1'],
            ['nis' => '20260002', 'name' => 'Jokowi Dodo', 'class' => 'XI PPLG 2'],
            ['nis' => '20260003', 'name' => 'Andi', 'class' => 'XI PPLG 1'],
            ['nis' => '20260004', 'name' => 'Dimas Pratama', 'class' => 'X PPLG 1'],
            ['nis' => '20260005', 'name' => 'Rizky Ramadhan', 'class' => 'X PPLG 2'],
            ['nis' => '20260006', 'name' => 'Siti Aminah', 'class' => 'X PPLG 1'],
            ['nis' => '20260007', 'name' => 'Dewi Lestari', 'class' => 'XI PPLG 1'],
            ['nis' => '20260008', 'name' => 'Reza Pahlevi', 'class' => 'XI PPLG 2'],
            ['nis' => '20260009', 'name' => 'Putri Wulandari', 'class' => 'XII PPLG 1'],
            ['nis' => '20260010', 'name' => 'Bayu Pratama', 'class' => 'XII PPLG 1'],
        ];

        $students = [];

        foreach ($rawStudents as $index => $student) {
            $status = ($index % 3 == 0) ? 'Inactive' : 'Active';

            $students[] = [
                'nis' => $student['nis'],
                'name' => $student['name'],
                'class' => $student['class'],
                'status' => $status
            ];
        }

        $data = [
            'title' => 'Students',
            'students' => $students
        ];

        return view('admin.student', $data);
    }
}
