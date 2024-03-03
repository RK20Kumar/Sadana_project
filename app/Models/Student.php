<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use HasFactory , Notifiable;
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'contact_no',
        'dob',
        'address',
        'school',
        'whatsapp_no',
        'student_id',
        'password',
        'student_profile_photo',
        // 'payment_option',
    ];

    public function setPaymentOptionAttribute($value)
    {
        $this->attributes['payment_option'] = $value;
    }


    //generate teacher id (SID)
    public static function generateStudentId(): string
        {
            $lastStudent = Student::orderBy('student_id', 'desc')->first();

            if ($lastStudent) {
                // Extract the numeric portion of the student ID
                $lastId = (int) substr($lastStudent->student_id, 3);
            } else {
                // Start at 0 if no previous student exists
                $lastId = 0;
            }

            // Increment the ID and pad with leading zeros
            $newId = str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);

            return 'SID' . $newId;
        }



    //generate password 
    public static function generatePassword(): string
        {
            return Str::random(12);
        }



        

                         //........Relationship......//       


    //student -> teacher_course (many to many)
    public function teacherCourses()
    {
        return $this->belongsToMany(TeacherCourse::class, 'student_teacher_courses', 'student_id', 'teacher_course_id');
    }



    //for make attendence
    public function attendances()
    {
        return $this->hasMany(Attendence::class, 'student_id');
    }




    // student ->announcement (one to many)
    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }


    














    //attendece
     public function teacherCoursesnew()
    {
        return $this->belongsToMany(TeacherCourse::class, 'attendances', 'student_id', 'teacher_course_id');
    }






                          //........Part of sending schedule email to the student......//
    // Other model attributes and methods...
       
    /**
    * Get the notification routing information for the mail channel.
    *
    * @param  \Illuminate\Notifications\Notification  $notification
    * @return string
    */
    public function routeNotificationForMail($notification)
    {
        // Return the email address to send notifications to
         return $this->email;
    }










}
