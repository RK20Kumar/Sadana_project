<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ParentController extends Controller
{

    public function __construct()
        {
            //$this->middleware(['auth:sanctum', 'verified']);  <- roles table eke sanctum ek tibboth awul wen nisa ain kala
            $this->middleware(['auth']);
        }

        
}
