<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TeacherCourse extends Model
{
    use HasFactory;
/*
    protected $table = 'teacher_courses'; // Specify the name of the pivot table

    protected $primaryKey = null; // Since it's a pivot table, we don't have a primary key in the traditional sense

    public $incrementing = false; // Disable auto-incrementing for the primary key

    public $timestamps = false; // Disable timestamps
*/
    protected $fillable = [
        'id',
        'teacher_id',
        'course_id',
    ];






                        //........Relationship......//


    //student -> teacher_course (many to many)
    public function students()
        {
            return $this->belongsToMany(Student::class, 'student_teacher_courses', 'teacher_course_id', 'student_id');
        }




    // Your other model code...

    public function online_classes()
    {
        return $this->hasMany(OnlineClass::class);
    }



   

   public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }








       //teacher course

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }


    
























    //sub relation | (app service provider eken with use karal blade ekata value pass kala nisa)
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');

    }

    
     public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }


    



}


