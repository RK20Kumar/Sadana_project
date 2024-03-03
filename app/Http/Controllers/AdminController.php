<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\TeacherCourse;
use App\Models\User;
use Illuminate\Http\Request;




class AdminController extends ParentController
{
     public function index()
        {
          
            // for use sync user permision tables 
            $admin = User::where('name', 'admin')->first();
            $manager = User::where('name', 'manager')->first();
            $operator = User::where('name', 'operator')->first();
        
            // Assign roles to users if they exist
            if ($admin) {
                $admin->assignRole('admin');
            }

            if ($manager) {
                $manager->assignRole('manager');
            }

            if ($operator) {
                $operator->assignRole('operator');
            }



            //Show Student count   #Ruki
            $studentCount = Student::count();

            //Show Teacher count   #Ruki
            $teacherCount = Teacher::count();

            //Show Subject count   #Ruki
            $courseCount = Course::count();

            //Show Class count   #Ruki
            $teacherCourseCount = TeacherCourse::count();


        // Add your admin dashboard logic here
            return view('pages.class_manager.post_login.dashboard-home', compact('studentCount', 'teacherCount', 'courseCount', 'teacherCourseCount'));
        }

}

