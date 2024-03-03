<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
                //create roles
                Role::create(['name' => 'super_admin']);
                Role::create(['name' => 'admin']);
                Role::create(['name' => 'manager']);
                Role::create(['name' => 'operator']);


                //  //$admin variable ekata user table eken adminw hoyala gannawa
                //  $admin = User::where('name', 'admin')->first();
                //  $manager = User::where('name', 'manager')->first();
                //  $operator = User::where('name', 'operator')->first();
                 $super_admin = User::where('name', 'super_admin')->first();


            //  //adminta admin role eka assign krnawa(model has roles)          
                // $admin->assignRole('admin');
                // $manager->assignRole('manager');
                // $operator->assignRole('operator');
                  $super_admin->assignRole('super_admin');
                
            //    // role tikth database eken gannawa-> assign krnwa variable ekata             
                $role_admin = Role::where('name', 'admin')->first();
                $role_manager = Role::where('name', 'manager')->first();
                $role_operator = Role::where('name', 'operator')->first();


                   

                    // // Check if the users exist, if not, create them and assign roles
                    // if (!User::where('name', 'admin')->exists()) {
                    //     $admin = User::create(['name' => 'admin']);
                    //     $admin->assignRole('admin');
                    // }

                    // if (!User::where('name', 'manager')->exists()) {
                    //     $manager = User::create(['name' => 'manager']);
                    //     $manager->assignRole('manager');
                    // }

                    // if (!User::where('name', 'operator')->exists()) {
                    //     $operator = User::create(['name' => 'operator']);
                    //     $operator->assignRole('operator');
                    // }

                    // if (!User::where('name', 'super_admin')->exists()) {
                    //     $super_admin = User::create(['name' => 'super_admin']);
                    //     $super_admin->assignRole('super_admin');
                    // }



                                   //create permission


                //dashboard->student
                $permission = Permission::create(['name' => 'view_student']);
                $permission = Permission::create(['name' => 'create_student']);
                $permission = Permission::create(['name' => 'update_student']);
                $permission = Permission::create(['name' => 'delete_student']);
                $permission = Permission::create(['name' => 'show_student_profile']);

                //dashboard->teacher
                $permission = Permission::create(['name' => 'view_teacher']);
                $permission = Permission::create(['name' => 'create_teacher']);
                $permission = Permission::create(['name' => 'update_teacher']);
                $permission = Permission::create(['name' => 'delete_teacher']);
                $permission = Permission::create(['name' => 'show_teacher_profile']);

                //dashboard->user
                $permission = Permission::create(['name' => 'view_user']);
                $permission = Permission::create(['name' => 'create_user']);
                $permission = Permission::create(['name' => 'update_user']);
                $permission = Permission::create(['name' => 'delete_user']);
                $permission = Permission::create(['name' => 'show_user_profile']);
                

                //dashboard->class
                $permission = Permission::create(['name' => 'view_class']);
                $permission = Permission::create(['name' => 'create_class']);
                $permission = Permission::create(['name' => 'update_class']);
                $permission = Permission::create(['name' => 'delete_class']);

                //dashboard->online class
                $permission = Permission::create(['name' => 'view_online_class']);
                $permission = Permission::create(['name' => 'create_online_class']);
                $permission = Permission::create(['name' => 'update_online_class']);
                $permission = Permission::create(['name' => 'delete_online_class']);

                //dashboard->shedule
                $permission = Permission::create(['name' => 'view_shedule']);

               
               






               

               // role ekata permission assign kenawa(role has permission)      

               //admin roles

                $role_admin ->givePermissionTo('view_student');
                $role_admin ->givePermissionTo('create_student');
                $role_admin ->givePermissionTo('update_student');
                $role_admin ->givePermissionTo('delete_student');
                $role_admin ->givePermissionTo('show_student_profile');

                $role_admin ->givePermissionTo('view_teacher');
                $role_admin ->givePermissionTo('create_teacher');
                $role_admin ->givePermissionTo('update_teacher');
                $role_admin ->givePermissionTo('delete_teacher');
                $role_admin ->givePermissionTo('show_teacher_profile');

                $role_admin ->givePermissionTo('view_user');
                //$role_admin ->givePermissionTo('create_user');
                //$role_admin ->givePermissionTo('update_user');
                //$role_admin ->givePermissionTo('delete_user');
                $role_admin ->givePermissionTo('show_user_profile');

                $role_admin ->givePermissionTo('view_class');
                $role_admin ->givePermissionTo('create_class');
                $role_admin ->givePermissionTo('update_class');
                $role_admin ->givePermissionTo('delete_class');

                $role_admin ->givePermissionTo('view_online_class');
                $role_admin ->givePermissionTo('create_online_class');
                $role_admin ->givePermissionTo('update_online_class');
                $role_admin ->givePermissionTo('delete_online_class');

                // $role_admin ->givePermissionTo('view_shedule');

                // $role_admin ->givePermissionTo('view_attendence');

                // $role_admin ->givePermissionTo('view_payment');

                // $role_admin ->givePermissionTo('view_lms');
                






                //manager roles

                $role_manager ->givePermissionTo('view_student');
                $role_manager ->givePermissionTo('create_student');
                $role_manager ->givePermissionTo('update_student');
                $role_manager ->givePermissionTo('delete_student');
                $role_manager ->givePermissionTo('show_student_profile');

                $role_manager ->givePermissionTo('view_teacher');
                //$role_manager ->givePermissionTo('create_teacher');
                //$role_manager ->givePermissionTo('update_teacher');
                //$role_manager ->givePermissionTo('delete_teacher');
                $role_manager ->givePermissionTo('show_teacher_profile');

                $role_manager ->givePermissionTo('view_user');
                //$role_manager ->givePermissionTo('create_user');
                //$role_manager ->givePermissionTo('update_user');
                //$role_manager ->givePermissionTo('delete_user');
                $role_manager ->givePermissionTo('show_user_profile');

                $role_manager ->givePermissionTo('view_class');
                $role_manager ->givePermissionTo('create_class');
                $role_manager ->givePermissionTo('update_class');
                $role_manager ->givePermissionTo('delete_class');

                $role_manager ->givePermissionTo('view_online_class');
                $role_manager ->givePermissionTo('create_online_class');
                $role_manager ->givePermissionTo('update_online_class');
                $role_manager ->givePermissionTo('delete_online_class');

                // $role_manager ->givePermissionTo('view_shedule');

                // $role_manager ->givePermissionTo('view_attendence');

                // //$role_manager ->givePermissionTo('view_payment');

                // $role_manager ->givePermissionTo('view_lms');







                //operator roles

                $role_operator ->givePermissionTo('view_student');
                $role_operator ->givePermissionTo('create_student');
                $role_operator ->givePermissionTo('update_student');
                $role_operator ->givePermissionTo('delete_student');
                $role_operator ->givePermissionTo('show_student_profile');

                $role_operator ->givePermissionTo('view_teacher');
                //$role_operator ->givePermissionTo('create_teacher');
                //$role_operator ->givePermissionTo('update_teacher');
                //$role_operator ->givePermissionTo('delete_teacher'); 
                $role_operator ->givePermissionTo('show_teacher_profile');

                //operator have not dashboard->user permission

                //operator have not dashboard->class permission
                $role_operator ->givePermissionTo('view_class');
                //$role_operator ->givePermissionTo('create_class');
                //$role_operator ->givePermissionTo('update_class');
                //$role_operator ->givePermissionTo('delete_class');

                $role_operator ->givePermissionTo('view_online_class');
                //$role_operator ->givePermissionTo('create_online_class');
                //$role_operator ->givePermissionTo('update_online_class');
                //$role_operator ->givePermissionTo('delete_online_class');

                //$role_operator ->givePermissionTo('view_shedule');

                //$role_operator ->givePermissionTo('view_attendence');

                //$role_operator ->givePermissionTo('view_payment');

                //$role_operator ->givePermissionTo('view_lms');

                




}
}