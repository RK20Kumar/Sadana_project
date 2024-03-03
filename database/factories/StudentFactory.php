<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class StudentFactory extends Factory
{
    protected $model = Student::class;

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
            'school' => $this->faker->company,
            'whatsapp_no' => $this->faker->phoneNumber,
            'student_id' => $this->faker->unique()->regexify('[A-Z0-9]{6}'),
            'password' => Hash::make('password'), // Hashed password
        ];
    }
}

