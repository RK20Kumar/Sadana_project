<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable =[

        'class_type',
        'title',
        'about_class',
        'date',
        'time',

    ];

    // Define a relationship: A schedule belongs to a teacher course
    public function teacher_course()
    {
        return $this->belongsTo(TeacherCourse::class, 'teacher_course_id');
    }


    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    //send mail
    public function teacherCourses()
    {
        // This function establishes a many-to-many relationship with the TeacherCourse model.
        // It uses the 'student_teacher_courses' pivot table to connect students and courses.
        // The 'student_id' column in the pivot table references the students, and the 'teacher_course_id'
        // column references the teacher courses that the student is enrolled in.
        return $this->belongsToMany(TeacherCourse::class, 'student_teacher_courses', 'student_id', 'teacher_course_id');
    }
}
