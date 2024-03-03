<?php

namespace App\Http\Controllers;

use App\Mail\AnnouncementMail;
use App\Models\Announcement;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AnnouncementController extends Controller
{
    public function index(){
        // $online_classes = Announcement::with('teacher_course.course', 'teacher_course.teacher')->get();
        // return view('pages.class_manager.post_login.announcement-home',compact('announcements'));

        $announcements = Announcement::all();
        return view('pages.class_manager.post_login.announcement-home',compact('announcements'));


    }

//create theAnnouncement

    public function store(Request $request){

        $type = $request->input('type');

        $announcement = new Announcement();
        $announcement->type = $request->input('type');
        $announcement->title = $request->input('title');
        $announcement->content = strip_tags($request->input('content')); // Remove HTML tags from content
        // $announcement->content = $request->input('content'); // Get CKEditor content
        // Set user_id if you have user authentication
        // $announcement->user_id = auth()->user()->id;
        $announcement->save();

        // Send the announcement to all students
        if ($type === 'All Students') {
            $students = Student::all();
            foreach ($students as $student) {
            //  $student->announcements()->attach($announcement);
                //dd($student);
            //send the email to allstudent
             Mail::to($student->email)->send(new AnnouncementMail($announcement));



         }
    // Send the announcement to all teachers
        } elseif ($type === 'All Teachers') {
            $teachers = Teacher::all();
        foreach ($teachers as $teacher) {
            // $teacher->announcements()->attach($announcement);
                //dd($teacher);
            //send the email to all Teachers
            Mail::to($teacher->email)->send(new AnnouncementMail($announcement));



        }
    // Send the announcement to all users
        } elseif ($type === 'All Users') {
            $users = User::all();
            foreach ($users as $user) {
             // $user->announcements()->attach($announcement);
                //dd($user);
            //send the email to all users
                Mail::to($user->email)->send(new AnnouncementMail($announcement));

            }

        }

        return redirect()->back()->with('success', 'Announcement saved and emails sent successfully.');

    }


//delete announcement
public function delete($id)
{
    $announcement = Announcement::findOrFail($id);
    $announcement->delete();

    return redirect()->back()->with('success', 'Announcement deleted successfully.');
}






}
