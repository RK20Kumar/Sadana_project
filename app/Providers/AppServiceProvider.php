<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Course;
use App\Models\Teacher;

use App\Models\TeacherCourse;
use App\Models\Student;
use App\Models\OnlineClass;
use Illuminate\Support\Facades\Auth;

use App\Http\Responses\CustomRegisterResponse;
use App\Models\Attendence;
use App\Models\User;
use Laravel\Fortify\Contracts\RegisterResponse;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        //pass the value for add student model

        View::composer('components.class_manager.add-student-model', function ($view) {
        $courses = Course::all(); // Fetch all courses from the database using Eloquent

        $view->with('courses', $courses);
        });


        // pass value to add teacher model

        View::composer('components.class_manager.add-teacher-model', function ($view) {
        $courses = Course::all();
        $teachers = Teacher::all();  // Fetch all courses from the database using Eloquent

        $view->with('courses', $courses)
            ->with('teachers',$teachers);
        });



        // pass value to teacher profile

        View::composer('profile.class_manager.teacher-profile', function ($view) {
        $courses = Course::all(); // Fetch all courses from the database using Eloquent

        $view->with('courses', $courses);
        });




        // pass value to add user model

        View::composer('components.class_manager.add-user-model', function ($view) {
        $users = User::all(); // Fetch all courses from the database using Eloquent

        $view->with('users', $users);

        });




        //pass value to attendence homa page

        View::composer('pages.class_manager.post_login.attendence', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
              ->with('teachers', $teachers)
              ->with('courses', $courses);
        });



        //pass value to add student model

        View::composer('components.class_manager.add-student-model', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
              ->with('teachers', $teachers)
              ->with('courses', $courses);

        });



         //pass value to student profile

        View::composer('profile.class_manager.student-profile', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
              ->with('teachers', $teachers)
              ->with('courses', $courses);

        });


        //pass value to student home

        View::composer('pages.class_manager.post_login.student-home', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
              ->with('teachers', $teachers)
              ->with('courses', $courses);

        });


        //pass value to add online class

        View::composer('components.class_manager.add-online-class-model', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
             ->with('teachers', $teachers)
             ->with('courses', $courses);
        });



        //pass value to attendence

        view()->composer('pages.class_manager.post_login.attendence', function ($view) {
        // You can modify the query to get specific teacherCourses data if needed
         $teacherCourses = TeacherCourse::select('id')->distinct()->get();

        // You can set default values for $selectedDate and $selectedCourse here if needed
        $selectedDate = date('Y-m-d');
        $selectedCourse = null;

        // Pass the variables to all views
        $view->with(compact('teacherCourses', 'selectedDate', 'selectedCourse'));

        });


        //pass value to all view

        view()->composer('*', function ($view) {
        // You can modify the query to get specific teacherCourses data if needed
        $teacherCourses = TeacherCourse::select('id')->distinct()->get();

        // You can set default values for $selectedDate and $selectedCourse here if needed
        $selectedDate = date('Y-m-d');
        $selectedCourse = null;

        // Fetch attendance records based on the selected date and course
        $attendanceRecords = Attendence::where('attendance_date', $selectedDate)
                ->when($selectedCourse, function ($query) use ($selectedCourse) {
                    return $query->where('teacher_course_id', $selectedCourse);
                })
                ->with('student')
                ->get();

        // Pass the variables to all views
        $view->with(compact('teacherCourses', 'selectedDate', 'selectedCourse', 'attendanceRecords'));

        });



        //pass value to website registration form

        View::composer('pages.website.registraion-form', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
                  ->with('teachers', $teachers)
                  ->with('courses', $courses);

         });


        //value pass to dashboard hoem page
        View::composer('pages.class_manager.post_login.dashboard-home', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
                    ->with('teachers', $teachers)
                    ->with('courses', $courses);

        });





        
        // create shedule form value pass       
        // Define a View Composer for the specified view 'components.class_manager.add-class-schedule-model'
        View::composer('components.class_manager.add-class-schedule-model', function ($view) {
        // Retrieve all records from the 'TeacherCourse' model
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent
    
        // Share the retrieved data with the view
        $view->with('teacher_courses', $teacher_courses)
             ->with('teachers', $teachers)
             ->with('courses', $courses);
    });

              
         //schedule-edit
        View::composer('profile.class_manager.schedule-edit', function ($view) {
        // Retrieve all records from the 'TeacherCourse' model
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent
        
        // Share the retrieved data with the view
        $view->with('teacher_courses', $teacher_courses)
             ->with('teachers', $teachers)
             ->with('courses', $courses);
    });

    //pass value to website registration form

        View::composer('pages.website.registration-form', function ($view) {
        $teacher_courses = TeacherCourse::all();
        $courses = Course::all(); // Fetch all courses from the database using Eloquent
        $teachers = Teacher::all(); // Fetch all teachers from the database using Eloquent

        $view->with('teacher_courses', $teacher_courses)
                  ->with('teachers', $teachers)
                  ->with('courses', $courses);

         });

       







       
   
      



















    }





}
