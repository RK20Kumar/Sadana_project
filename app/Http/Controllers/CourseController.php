<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CourseController extends ParentController
{
        protected $course;

        
        //show course home page
        public function index()
            {

                $user = Auth::user();

                if($user->can('view_class'))
                {
                    $courses = Course::all();
                    return view('pages.class_manager.post_login.course-home',compact('courses'));
                    
                }else{

                    return redirect()->back();
                    
                }
                
            }

        //Get inputs value to variable
        public function store(Request $request)
            {
                $user = Auth::user();

                if($user->can('create_class'))
                {
                    //validate course
                    $request->validate([
                        // 'subject_name' => 'required',
                        // 'grade' => 'required',
                        // 'medium' => 'required',

                    ]);

                    // Save the course details to the database
                    $course = new Course();
                    $course->subject_name = $request->input('subject_name');
                    $course->grade = $request->input('grade');
                    $course->medium = $request->input('medium');
                    $course->save();

                    // Other logic or redirection after successful registration
                    return redirect()->back();

                }else{

                    return redirect()->back();
                    
                }   
            }

        //remove course
        public function remove($id)
            {
                $user = Auth::user();

                if($user->can('delete_class'))
                {
                    $courses = Course::findOrFail($id);
                    $courses->delete();
                    return redirect()->back();

                }else{

                    return redirect()->back();
                    
                }               
            }












}








