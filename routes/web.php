<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClassmanagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OnlineClassController;
use App\Http\Controllers\LmsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ContactController;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
//redirect to admin dashboard
Route::get('/dashboard',[ClassmanagerController::class,"home"])->name('dashboard');
*/








// load first page
Route::get('/', function () {
    return view('auth.login'); //show login page
});


//admin Routes
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/dashboard/home', [AdminController::class, 'index'])->name('admin.dashboard'); //connect admin dashboard
//     // Add more admin routes as needed
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/home', [AdminController::class, 'index'])->name('admin.dashboard'); //connect admin dashboard
    // Add more admin routes as needed
});


//students Routes
Route::prefix('/dashboard/Students')->group(function(){
    Route::get('/',[StudentController::class,"index"])->name('dashboard.student.home');//show student home page
    Route::post('/register',[StudentController::class,"store" ])->name('dashboard.student.register'); //add new student
    //Route::match(['get', 'post'], '/register', [StudentController::class, 'store'])->name('dashboard.student.register');

    Route::get('/{student_id}/remove',[StudentController::class,"removeProfile"])->name('dashboard.student.remove');  // remove student


    Route::get('/profile/{student_id}',[StudentController::class,"showProfile"])->name('dashboard.student.profile');  //show profile
    Route::post('/{id}/update',[StudentController::class, "update"])->name('dashboard.student.update');  //update student
    // Route::post('/register-submit',[StudentController::class,"register" ])->name('website.student.register'); //add new student




});








//Teachers Routes
Route::prefix('/dashboard/Teachers')->group(function(){
    Route::get('/',[TeacherController::class,"index"])->name('dashboard.teacher.home'); //show teacher home page
    Route::post('/register',[TeacherController::class,"store"])->name('dashboard.teacher.register'); //add new teacher
    //Route::match(['get', 'post'], '/register', [TeacherController::class, 'store'])->name('dashboard.teacher.register');
    Route::get('/{teacher_id}/remove',[TeacherController::class,"remove"])->name('dashboard.teacher.remove');  // remove teacher
    //Route::get('/profile/{teacher_id}',[TeacherController::class,"showProfile"])->name('dashboard.teacher.profile');  //show profile
    Route::get('/profile/{teacher_id}/profile',[TeacherController::class,"showProfile"])->name('dashboard.teacher.profile');

    Route::post('/{id}/update',[TeacherController::class, "update"])->name('dashboard.teacher.update');  //update teachers


});


//course Routes(subject)
Route::prefix('/dashboard/Subject')->group(function(){
    Route::get('/',[CourseController::class,"index"])->name('dashboard.course.home'); //show class home page
    Route::post('/add',[CourseController::class,"store"])->name('dashboard.course.add'); //add class
    Route::get('/{id}/remove',[CourseController::class,"remove"])->name('dashboard.course.remove'); //remove class
});

//classes Routes
Route::prefix('/dashboard/Classes')->group(function(){
    Route::get('/',[ClassesController::class,"index"])->name('dashboard.classes.home'); //show class home page
    // Route::post('/add',[CourseController::class,"store"])->name('dashboard.course.add'); //add class
    // Route::get('/{id}/remove',[CourseController::class,"remove"])->name('dashboard.course.remove'); //remove class
});

//user Routes
Route::prefix('dashboard/Users')->group(function(){
    Route::get('/',[UserController::class, "index"])->name('dashboard.user.home');  //show users
    Route::get('/{id}/remove',[UserController::class, "remove"])->name('dashboard.user.remove');  //show users
    //Route::post('/{id}/update',[UserController::class, "update"])->name('dashboard.user.update');  //show users
    Route::get('/{id}/profile',[UserController::class, "showProfile"])->name('dashboard.user.profile');  //show users


    Route::get('/profile',[UserController::class, "showProfile_user"])->name('dashboard.user.profile.show');  //user profile view - user side
    Route::post('/profile/update',[UserController::class, "updateProfile_user"])->name('dashboard.user.profile.update');  //user profile update - user side
});



//online-class Routes
Route::prefix('dashboard/Online-classes')->group(function(){
    Route::get('/',[OnlineClassController::class, "index"])->name('dashboard.online-class.home');  //show online
    Route::post('/add',[OnlineClassController::class, "store"])->name('dashboard.online-class.add');  //store online
    Route::get('/{id}/remove',[OnlineClassController::class,"remove"])->name('dashboard.online-class.remove'); //remove online-class
    Route::post('/{id}/update',[OnlineClassController::class, "update"])->name('dashboard.online-class.update');  //update online-class




});


//lms routes
Route::prefix('/dashboard/lms')->group(function(){
    Route::get('/',[LmsController::class,"index"])->name('dashboard.lms.home'); //show lms home page


});


//attendence routes
Route::prefix('/dashboard/attendence')->group(function(){
    Route::get('/',[AttendenceController::class,"index"])->name('dashboard.attendence.home'); //show lms home page
    Route::post('/mark',[AttendenceController::class,"mark"])->name('dashboard.attendence.mark'); //show lms home page
    Route::get('/show',[AttendenceController::class,"showAttendance"])->name('show'); //show about us page




});




//webiste routes
Route::prefix('/sadana')->group(function(){
    Route::get('/',[WebsiteController::class,"index"])->name('home'); //show lms home page
    Route::get('/about-us',[WebsiteController::class,"about"])->name('about'); //show about us page
    Route::get('/courses',[WebsiteController::class,"courses"])->name('courses');//show courses page
    Route::get('/teachers',[WebsiteController::class,"teachers"])->name('teachers');//show teachers page
    Route::get('/contact',[WebsiteController::class,"contact"])->name('contact');//show contact page

    Route::get('/website_register',[WebsiteController::class,"website_register"])->name('website_register');//show registration form
    Route::post('/submite_form',[WebsiteController::class,"submit_form"])->name('submit_form');//show registration form
    Route::get('/success',[WebsiteController::class,"success"])->name('registration_success');//show registration form
    Route::get('/Payment',[WebsiteController::class,"payment"])->name('online_checkout');//show registration form
    Route::get('/Payment',[WebsiteController::class,"payhere"])->name('payhere');//show registration form

    Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



});




//announcement Routes
    Route::prefix('dashboard/announcement')->group(function(){
    Route::get('/',[AnnouncementController::class, "index"])->name('dashboard.announcement.home');  //show Announcement
    Route::post('/save_announcement',[AnnouncementController::class, "store"])->name('dashboard.announcement.save_announcement');  //show Announcement
    Route::get('/delete_announcement/{id}',[AnnouncementController::class, "delete"])->name('dashboard.announcement.delete');  //delete Announcement

});



//schedule Routes
Route::prefix('dashboard/schedule')->group(function(){
    Route::get('/',[ScheduleController::class, "index"])->name('dashboard.schedule.home');  //show schedule
    Route::post('/add',[ScheduleController::class, "store"])->name('dashboard.schedule.add');  //store schedule
    Route::get('/dashboard/schedule/delete/{id}', [ScheduleController::class, 'delete'])->name('dashboard.schedule.delete');
    Route::get('/dashboard/schedule/edit/{id}', [ScheduleController::class, 'edit'])->name('dashboard.schedule.edit');
    Route::post('/dashboard/schedule/update/{id}', [ScheduleController::class, 'update'])->name('dashboard.schedule.update');
});

























/*

Route::get('', function () {
    return view('pages.class_manager.pre_login.login');
});
*/

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
