<?php

namespace App\Http\Controllers;

use App\Mail\StudentRegistrationMail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
     //home page
    public function index(){
        return view('pages.website.website-home');
    }

    //about us page
    public function about(){
        return view('pages.website.website-about');
    }

     //courses page
     public function courses(){
        return view('pages.website.website-courses');
    }

    //teachers page
    public function teachers(){
        return view('pages.website.website-teachers');
    }

    //contact page
    public function contact(){
        return view('pages.website.website-contact');
    }


    //register page
    public function website_register(){
        $student = Student::all(); 
        return view('pages.website.registration-form',compact('student'));
    }


    //web site registratio save student data to databse4
    public function submit_form(Request $request)
            {
              
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
                    $student->payment_option = $request->input('payment_option');
                    
                    $student->password = Student::generatePassword();
                    if ($request->hasFile('student_profile_photo')) {
                        $imageName = time() . "." . $request->file('student_profile_photo')->extension();
                        $request->file('student_profile_photo')->move(public_path('student_profile_photos'), $imageName);
                        $student->student_profile_photo = $imageName;
                    }

                    $student->save();
                    // dd($student);

                    // Sync the selected courses with the student
                    //$student->teacher_courses()->sync($request->input('teacher_courses'));
                    $teacherCourses = $request->input('teacher_courses');
                    $student->teacherCourses()->sync($teacherCourses);
                    // dd($request->input('teacher_courses'));
                    $student->save();


                    // Send registration email
                    Mail::to($student->email)->send(new StudentRegistrationMail($student));

                    // Other logic or redirection after successful registration
                    
                    // return redirect()->route('registration_success');

                    $paymentOption = $request->input('payment_option');

                    if ($paymentOption === 'online') {
                        // Redirect to the online checkout page (replace with your actual route)
                        return redirect()->route('online_checkout');
                    } elseif ($paymentOption === 'manual') {
                        // Redirect to the success page (replace with your actual route)
                        return redirect()->route('registration_success');
                    }

                    // Default redirection if payment option is not specified
                    return redirect()->route('registration_success');



            }


        // public function success($student_id){
        // // $student = Student::all();
        // $students = Student::findOrFail($student_id);
        // return view('pages.website.registration-success',compact('students'));
        // }


        public function success(){
        
        return view('pages.website.registration-success');
        }

        public function payment()
            {
                $paymentLink = 'https://sandbox.payhere.lk/pay/o71b83c85';
                return redirect()->away($paymentLink);
            }


        public function payhere()
            {
                $paymentLinks = 'https://sandbox.payhere.lk/merchant/home';
                return redirect()->away($paymentLinks);
            }



        







}
