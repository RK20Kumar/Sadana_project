<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the super admin user if it doesn't exist
        if (!User::where('email', 'superadmin@gmail.com')->exists()) {
            User::create([
                'name' => 'Super_admin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('superadmin@123'),
            ]);
        }


        
    }
}
