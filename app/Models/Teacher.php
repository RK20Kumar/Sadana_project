<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Teacher extends Model
{
    use HasFactory;
    protected $primaryKey = 'teacher_id'; // Specify teacher_id as the primary key
    public $incrementing = false; // Disable auto-increment for the primary key
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'contact_no',
        'dob',
        'address',
        'teacher_id',
        'password',
        'teacher_profile_photo',
    ];


    //generate teacher id (TID)
    public static function generateTeacherId(): string
        {
            $lastTeacher = Teacher::orderBy('teacher_id', 'desc')->first();

            if ($lastTeacher) {
                // Extract the numeric portion of the teacher ID
                $lastId = (int) substr($lastTeacher->teacher_id, 3);
            } else {
                // Start at 0 if no previous teacher exists
                $lastId = 0;
            }

            // Increment the ID and pad with leading zeros
            $newId = str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);

            return 'TID' . $newId;
        }


    //generate password 
    public static function generatePassword(): string
        {
            return Str::random(12);
        }





                        //........Relationship......//


    //teacher -> course (many to many)
    public function courses()
        {
            return $this->belongsToMany(Course::class, 'teacher_courses', 'teacher_id', 'course_id');
        }







    //for make attendence
    public function teacherCoursesnew()
    {
        return $this->hasMany(TeacherCourse::class);
    }



    //teacher->announcement(one to many)
        public function announcements()
        {
            return $this->hasMany(Announcement::class);
        }



}
