<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentRegistrationMail;
use App\Http\Controllers\ParentController;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Auth;


class StudentController extends ParentController
{
        public function __construct()
        {
           // $this->middleware(['auth','can:view_student']);    me controller ekata access tiyenne me can:create eka assign krpu userlata witarai(ROUTE BLOCK KRNNA PULUWN)
           // $this->middleware(['auth','can:create_student']);
           // $this->middleware(['auth','role:admin']);
        }



        protected $student;

        //show student home page
        public function index()
            {
                $user = Auth::user();

                if($user->can('view_student')){

                    $students = Student::all(); // Retrieve all students from the database
                    //$students = Student::with('teacher_courses')->get();
                    return view('pages.class_manager.post_login.student-home', compact('students'));

                }else{
                    return redirect()->back();
                }

            }


        //create student
        public function store(Request $request)
            {
                $user = Auth::user();

                if($user->can('create_student')){

                    // Validate inputs
                    $request->validate([
                        // 'first_name' => 'required',
                        // 'last_name' => 'required',
                        // 'gender' => 'required',
                        'email' => 'required|email|unique:students,email',
                        // 'contact_no' => 'required',
                        // 'teacher_courses' => 'required|array', // Validate that courses[] is an array
                    ]);

                    // Save the student details to the database
                    $student = new Student();
                    $student->student_id = Student::generateStudentId();
                    $student->first_name = $request->input('first_name');
                    $student->last_name = $request->input('last_name');
                    $student->gender = $request->input('gender');
                    $student->email = $request->input('email');
                    $student->contact_no = $request->input('contact_no');
                    $student->dob = $request->input('dob');
                    $student->address = $request->input('address');
                    $student->school = $request->input('school');
                    $student->whatsapp_no = $request->input('whatsapp_no');
                    $student->password = Student::generatePassword();
                    

                    if ($request->hasFile('student_profile_photo')) {
                        $imageName = time() . "." . $request->file('student_profile_photo')->extension();
                        $request->file('student_profile_photo')->move(public_path('student_profile_photos'), $imageName);
                        $student->student_profile_photo = $imageName;
                    }

                    $student->save();

                    // Sync the selected courses with the student
                    //$student->teacher_courses()->sync($request->input('teacher_courses'));
                    $teacherCourses = $request->input('teacher_courses');
                    $student->teacherCourses()->sync($teacherCourses);
                    //dd($request->input('teacher_courses'));
                    $student->save();


                    // Send registration email
                    Mail::to($student->email)->send(new StudentRegistrationMail($student));

                    // Other logic or redirection after successful registration
                    return redirect()->back();

                }else{

                    //dd('You dont have permission');
                    return redirect()->back();

                }




            }

        //delete student
        public function removeProfile($student_id)
            {
                $user = Auth::user();

                if($user->can('delete_student'))
                {
                    $students = Student::findOrFail($student_id);
                    $students->delete();
                    return redirect()->back();

                }else{

                    return redirect()->back();

                }

            }

        //show student profile
        public function showProfile($student_id)
            {
                $user = Auth::user();

                if($user->can('show_student_profile')){

                    $students = Student::findOrFail($student_id);
                    return view('profile.class_manager.student-profile',compact('students'));

                }else{

                    return redirect()->back();


                }

            }



            public function update(Request $request,$student_id ){


                $user = Auth::user();
                if($user->can('update_student')){

                    $student = Student::findOrFail($student_id);

                    $student->first_name = $request->input('first_name');
                    $student->last_name = $request->input('last_name');
                    $student->gender = $request->input('gender');
                    $student->email = $request->input('email');
                    $student->contact_no = $request->input('contact_no');
                    $student->dob = $request->input('dob');
                    $student->address = $request->input('address');
                    

                    if ($request->hasFile('student_profile_photo')) {
                        $imageName = time() . "." . $request->file('student_profile_photo')->extension();
                        $request->file('student_profile_photo')->move(public_path('student_profile_photos'), $imageName);
                        $student->student_profile_photo = $imageName;
                    }

                    $student->save();


                    // Sync the selected courses with the teacher
                    $teacherCourses = $request->input('teacher_courses');
                    $student->teacherCourses()->sync($teacherCourses);
                    $student->save();
                    return redirect()->back();

                }else{

                    // Redirect back with a success messag`e
                    return redirect()->back()->with('success', 'Profile updated successfully!');

                }

         }









       
}


