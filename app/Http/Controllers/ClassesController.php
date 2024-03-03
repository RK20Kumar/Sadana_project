<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherCourse;

class ClassesController extends Controller
{
    public function index(){

        // $classes = TeacherCourse::all();
        // $classes = TeacherCourse::with('courses')->get();

         return view('pages.class_manager.post_login.classes-home');
    }



}
