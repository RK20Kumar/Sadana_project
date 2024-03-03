<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'grade',
        'medium',
        

    ];

    

                        //........Relationship......//


    //teacher -> course (many to many)
    public function teachers()
        {
            return $this->belongsToMany(Teacher::class, 'teacher_courses', 'course_id', 'teacher_id');
        }







    //for make attendence
    public function teacherCoursesnew()
    {
        return $this->hasMany(TeacherCourse::class);
    }


}
