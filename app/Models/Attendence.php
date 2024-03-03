<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;

   // protected $fillable = ['student_id', 'attendance_date', 'is_present','selected_date',];
   // protected $fillable = ['student_id', 'teacher_course', 'attendance_date', 'status'];


protected $fillable = ['student_id', 'teacher_course_id', 'attendance_date', 'status','selected_date','selected_course'];


    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }




    public function students()
    {
        return $this->belongsTo(Student::class);
    }


    public function teacherCourse()
    {
        return $this->belongsTo(TeacherCourse::class);
    }



 





 














}

