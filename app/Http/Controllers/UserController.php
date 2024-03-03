<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class UserController extends ParentController
{

    public function index(){

        // Retrieve users by name
            $admin = User::where('name', 'admin')->first();
            $manager = User::where('name', 'manager')->first();
            $operator = User::where('name', 'operator')->first();
            $super_admin = User::where('name', 'super_admin')->first();

            // Assign roles to users if they exist
            if ($admin) {
                $admin->assignRole('admin');
            }

            if ($manager) {
                $manager->assignRole('manager');
            }

            if ($operator) {
                $operator->assignRole('operator');
            }

            if ($super_admin) {
                $super_admin->assignRole('super_admin');
            }




            $user = Auth::user();

            if($user->can('view_user'))
            {
                $users=User::all();
                return view('pages.class_manager.post_login.user-home',compact('users'));

            }else{

                return redirect()->back();

            }


    }

    public function remove($id){

        $user = Auth::user();
                if($user->can('delete_user')){

                    $users = User::findOrfail($id);
                    $users->delete();
                    return redirect()->back();

                }else{

                    return redirect()->back();

                }

    }





    public function showProfile_user(){

       

        $user = Auth::user();
                if($user->can('show_user_profile')){

                            // Pass the user data to the profile view
                return view('profile.class_manager.user-profile',compact('user'));

                }else{

                }

        
    }






    //update profile user side

    public function updateProfile_user(Request $request)
    {
        // Validate the incoming request data
        $request->validate([

        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update the user's profile information
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'contact_no' => $request->input('contact_no'),
            'dob' => $request->input('dob'),
            'address' => $request->input('address'),

        ]);

        if ($request->hasFile('user_profile_photo')) {
                        $imageName = time() . "." . $request->file('user_profile_photo')->extension();
                        $request->file('user_profile_photo')->move(public_path('user_profile_photos'), $imageName);
                        $user->user_profile_photo = $imageName;
                    }

            $user->save(); 



        // Redirect back with a success messag`e
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }





     public function showProfile($user_id){

        $user = Auth::user();
                if($user->can('show_user_profile')){
                    
                    $user = User::findOrFail($user_id);

                    // Pass the user data to the profile view
                    return view('profile.class_manager.user-profile',compact('user'));
                    
                }else{

                }

         
    }




        //  public function update(Request $request,$id){

        //         $user = User::findOrFail($id);

        //             $user->first_name = $request->input('first_name');
        //             $user->last_name = $request->input('last_name');
        //             $user->gender = $request->input('gender');
        //             $user->email = $request->input('email');
        //             $user->contact_no = $request->input('contact_no');
        //             $user->dob = $request->input('dob');
        //             $user->address = $request->input('address');   

        //             if ($request->hasFile('user_profile_photo')) {
        //                 $imageName = time() . "." . $request->file('user_profile_photo')->extension();
        //                 $request->file('user_profile_photo')->move(public_path('user_profile_photos'), $imageName);
        //                 $user->user_profile_photo = $imageName;
        //             }
              
        //             $user->save();              
                    



        // // Redirect back with a success messag`e
        // return redirect()->back()->with('success', 'Profile updated successfully!');




        //  }











}



















