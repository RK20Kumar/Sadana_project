<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTeacherCourse extends Model
{
    use HasFactory;

    protected $fillable =[
        'student_id',
        'teacher_course_id',
    ];
}
