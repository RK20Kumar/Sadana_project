<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 random student records
        \App\Models\Student::factory(10)->create();
    }
}

