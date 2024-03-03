<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Student;
use App\Models\TeacherCourse;
use Illuminate\Http\Request;
  use Carbon\Carbon;
  use Illuminate\Support\Facades\DB;


class AttendenceController extends ParentController
{
    public function index(){
        
     return view('pages.class_manager.post_login.attendence');

    }



                public function mark(Request $request)
                {
                    $studentId = $request->input('student_id');
                    $teacherCourseId = $request->input('teacher_course'); // Assuming the name of the radio input is "teacher_course"

                    $student = Student::where('student_id', $studentId)->first();

                    if (!$student) {
                        return redirect()->back()->with('error', 'Student not found.');
                    }

                    // Check if the student is registered in the selected course
                    $isRegistered = $student->teacherCourses->contains('id', $teacherCourseId);
                    if (!$isRegistered) {
                        return redirect()->back()->with('error', 'Student is not registered in the selected course.');
                    }

                    $attendanceDate = $request->input('attendance_date');
                    $status = $request->input('status');
                        //dd($request);
                    // Save the attendance record
                    $attendance = new Attendence();
                    $attendance->student_id = $student->student_id;
                    $attendance->teacher_course_id = $teacherCourseId; // Save the selected teacher_course_id
                    $attendance->attendance_date = Carbon::createFromFormat('Y-m-d', $attendanceDate)->format('Y-m-d');
                    $attendance->status = $status;
                     //dd($attendance);
                    $attendance->save();

                    return redirect()->back()->with('success', 'Attendance marked successfully.');
                } 
                        


  












  

// app/Http/Controllers/AttendanceController.php



    public function showAttendance(Request $request)
    {
        $selectedDate = $request->input('selected_date', date('Y-m-d'));
        $selectedCourse = $request->input('selected_course');

        $teacherCourses = TeacherCourse::select('id')->distinct()->get();

        $attendanceRecords = Attendence::where('attendance_date', $selectedDate)
            ->when($selectedCourse, function ($query) use ($selectedCourse) {
                return $query->where('teacher_course_id', $selectedCourse);
            })
            ->with('student')
            ->get();

        return view('pages.class_manager.post_login.attendence', compact('attendanceRecords', 'selectedDate', 'teacherCourses', 'selectedCourse'));
    }





}
