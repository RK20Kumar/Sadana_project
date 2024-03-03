<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\TeacherCourse;
use App\Models\Student;


use Illuminate\Support\Facades\Auth;
use App\Notifications\ExtraClassNotification;
use Illuminate\Support\Facades\Notification;
class ScheduleController extends Controller
{
    // Display the list of schedules
    public function index(){

        // Get the authenticated user
        $user = Auth::user();

        if($user->can('view_schedule'))
        {
            // Retrieve schedules with related data
            $schedules = Schedule::with('teacher_course.course', 'teacher_course.teacher')->get();
            // Return view with schedules data
            return view('pages.class_manager.post_login.schedule-home', compact('schedules'));

        }
        else
        {
            // Redirect back if user doesn't have permission
            return redirect()->back();
        }
    }

     // Store a new schedule
     public function store(Request $request)
     {
         // Get the authenticated user
         $user = Auth::user();

         if($user->can('create_schedule'))
         {
             // Validate inputs
             $request->validate([

                 'class_type' => 'required',
                 'title' => 'required',
                 'teacher_courses' => 'required',
                 'about_class' => 'required',
                 // 'date' => 'required',
                 // 'time' => 'required',
             ]);

             //dd($request);

             // Create a new Schedule instance
             $schedule = new Schedule();
             $schedule->class_type = $request->input('class_type');
             $schedule->title = $request->input('title');
             $schedule->about_class = $request->input('about_class');
             $schedule->date = $request->input('date');
             $schedule->time = $request->input('time');


             // Find the selected teacher course
             $teacher_course_id = $request->input('teacher_courses');
             $teacher_course = TeacherCourse::find($teacher_course_id);
             


             // Associate the schedule with the teacher course
             $teacher_course->schedules()->save($schedule);

             // Save the schedule to the database
             $schedule->save();

            // Get the teacher course associated with the schedule
            $teacherCourse = TeacherCourse::find($request->input('teacher_courses'));

            // Send email to students of the selected subject
            $students = $teacherCourse->students;
            Notification::send($students, new ExtraClassNotification($schedule ));

             

            return redirect()->back();


             // Redirect back after successful scheduling
             //return redirect()->back();

          }
          else
          {
          // Redirect back if user doesn't have permission
          return redirect()->back();

          }
      }



      //schedule delete
      public function delete($id)
      {
      $user = Auth::user();

        if ($user->can('delete_schedule')) {
        $schedule = Schedule::findOrFail($id);

        // Delete the schedule
        $schedule->delete();

        return redirect()->back()->with('success', 'Schedule deleted successfully.');
    }

    return redirect()->back()->with('error', 'Permission denied.');
      }


      //schedule edit
      public function edit($id)
     {
       $schedule = Schedule::findOrFail($id);
       // Add any necessary logic here
       return view('profile.class_manager.schedule-edit', compact('schedule'));
     }



       //schedule update

       public function update(Request $request, $id)
       {
         $schedule = Schedule::findOrFail($id);
         // Validate and update schedule details
         $schedule->update([
        'class_type' => $request->input('class_type'),
        'title' => $request->input('title'),
        'about_class' => $request->input('about_class'),
        'date' => $request->input('date'),
        'time' => $request->input('time'),
        
    ]);

    // Redirect back to the schedule list or wherever you prefer
    return redirect()->route('dashboard.schedule.home')->with('success', 'Schedule updated successfully.');
    }


    
}



















