<?php

namespace Database\Seeders;

use AdminSeeder;
use Illuminate\Database\Seeder;
use ManagerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        //run seeder files

        $this->call(SuperAdminSeeder::class);

        // $this->call(AdminSeeder::class);
        // $this->call(ManagerSeeder::class);
        // $this->call(OperatorSeeder::class);

        
        $this->call(RolesAndPermissionsSeeder::class);

        // $this->call(RolesAndPermissionsSeeder::class);
        
    }
}
