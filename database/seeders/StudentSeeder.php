<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'student_name' => 'Joh Doe',
            'address' => '123 Main st',
            'email' => 'abc@gmail.com',
            'department_name' => 'CSE',
            'student_status' => '1',
            'result' => '2.5'

        ]);
    }
}
