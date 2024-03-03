<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'email' => $this->faker->unique()->safeEmail,
            'contact_no' => $this->faker->phoneNumber,
            'dob' => $this->faker->date,
            'address' => $this->faker->address,
            'teacher_id' => $this->faker->unique()->regexify('[A-Z0-9]{6}'),
            'password' => Hash::make('password'), // Hashed password
            
        ];
    }
}

