<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineClass extends Model
{
    use HasFactory;

    protected $fillable =[

        'title',
        'about_class',
        'date',
        'time',

    ];




                    //........Relationship......//



    //online_class -> teacher_course (one to many)
    public function teacher_course()
    {
        return $this->belongsTo(TeacherCourse::class, 'teacher_course_id');
    }




    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }






}
