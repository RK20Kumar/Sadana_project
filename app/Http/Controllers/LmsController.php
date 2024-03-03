<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LmsController extends Controller
{
    public function index(){
        return view('pages.lms.post_login.lms-home');
    }
}
