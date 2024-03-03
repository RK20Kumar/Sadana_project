<?php

namespace App\Http\Controllers;

use App\Mail\TeacherRegistrationMail;
use App\Models\Teacher;
use App\Models\TeacherCourse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TeacherController extends ParentController
{
        
        
        protected $teacher;
        
        //show teacher home page
        public function index()
            {   
                $user = Auth::user();

                if($user->can('view_teacher'))
                {
                    $teachers = Teacher::with('courses')->get(); // Retrieve all teachers with their courses from the database   //relationship data show
                    return view('pages.class_manager.post_login.teacher-home', compact('teachers'));

                }else{

                    return redirect()->back();
                    
                }

                
            }

        //create teacher
        public function store(Request $request)
            {

                $user = Auth::user();

                if($user->can('create_teacher'))
                {
                        /*
                    dd($request->all());
                    return view('test');
                    */

                    // Validate inputs
                    $request->validate([
                        // 'first_name' => 'required',
                        // 'last_name' => 'required',
                        // 'gender' => 'required',
                        // 'email' => 'required|email|unique:teachers,email', 
                        // 'contact_no' => 'required',
                        // 'courses' => 'required|array', // Validate that courses[] is an array                    
                    ]);

                // Save the student details to the database
                    $teacher = new Teacher();
                    $teacher->teacher_id = Teacher::generateTeacherId();  //
                    $teacher->first_name = $request->input('first_name');
                    $teacher->last_name = $request->input('last_name');
                    $teacher->gender = $request->input('gender');
                    $teacher->email = $request->input('email');
                    $teacher->contact_no = $request->input('contact_no');
                    $teacher->dob = $request->input('dob');
                    $teacher->address = $request->input('address');               
                       

                    if ($request->hasFile('teacher_profile_photo')) {
                        $imageName = time() . "." . $request->file('teacher_profile_photo')->extension();
                        $request->file('teacher_profile_photo')->move(public_path('teacher_profile_photos'), $imageName);
                        $teacher->teacher_profile_photo = $imageName;
                    } 

                    $teacher->save();  

                    // Sync the selected courses with the teacher
                    $teacher->courses()->sync($request->input('courses'));
                    //dd($request->input('courses'));          
                    $teacher->password = Teacher::generatePassword();              
                    $teacher->save();

                    // Send registration email
                    Mail::to($teacher->email)->send(new TeacherRegistrationMail($teacher));

                    // Other logic or redirection after successful registration
                    return redirect()->back();

                }else{

                    return redirect()->back();
                    
                }
                
            }

        //delete Teacher 
        public function remove($teacher_id)
            {   
                $user = Auth::user();
                if($user->can('delete_teacher'))
                {
                    $teachers = Teacher::findOrFail($teacher_id);
                    $teachers->delete();
                    return redirect()->back();

                }else{

                    return redirect()->back();
                    
                }

                
            }

        //show teacher profile
        public function showProfile($teacher_id)
            {   
                $user = Auth::user();

                if($user->can('show_teacher_profile'))
                {
                    $teachers = Teacher::findOrFail($teacher_id);
                    $courses = $teachers->courses;
                    return view('profile.class_manager.teacher-profile', compact('teachers', 'courses'));

                }else{

                    return redirect()->back();
                    
                }

                
            }




            public function update(Request $request,$teacher_id ){

                $user = Auth::user();
                if($user->can('update_teacher')){

                    $teacher = Teacher::findOrFail($teacher_id);

                    $teacher->first_name = $request->input('first_name');
                    $teacher->last_name = $request->input('last_name');
                    $teacher->gender = $request->input('gender');
                    $teacher->email = $request->input('email');
                    $teacher->contact_no = $request->input('contact_no');
                    $teacher->dob = $request->input('dob');
                    $teacher->address = $request->input('address');   

                    if ($request->hasFile('teacher_profile_photo')) {
                        $imageName = time() . "." . $request->file('teacher_profile_photo')->extension();
                        $request->file('teacher_profile_photo')->move(public_path('teacher_profile_photos'), $imageName);
                        $teacher->teacher_profile_photo = $imageName;
                    }

                    // if ($request->hasFile('teacher_profile_photo') && $teacher->teacher_profile_photo) {
                    // $previousPhotoPath = public_path('teacher_profile_photos') . '/' . $teacher->teacher_profile_photo;
                    // if (file_exists($previousPhotoPath)) {
                    //     unlink($previousPhotoPath);
                    //     }
                    // }

                    $teacher->save();              
                    // Sync the selected courses with the teacher
                    $teacher->courses()->sync($request->input('courses'));

                    $teacher->save();

                    return redirect()->back()->with('success', 'Teacher information updated successfully.');

                }else{

                    
                    // Redirect back with a success messag`e
                    return redirect()->back();

                }

                 







         }













}
