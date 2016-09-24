<?php

use Illuminate\Database\Seeder;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
           'name' => "Admin",
            'display_name' => "Administrator",
            'description' => "Control administrative function"
        ]);

        DB::table('roles')->insert([
            'name' => "Student",
            'display_name' => "Student",
            'description' => "Initiate document"
        ]);

        DB::table('roles')->insert([
            'name' => "Hod",
            'display_name' => "Head of department",
            'description' => "Has a permission over a department"
        ]);

        DB::table('roles')->insert([
            'name' => "Dos",
            'display_name' => "Dean of school",
            'description' => "Perform all tasks over the school"
        ]);

        DB::table('roles')->insert([
            'name' => "principal",
            'display_name' => "principal",
            'description' => "Has a permission over the college"
        ]);

        DB::table('roles')->insert([
            'name' => "Dost",
            'display_name' => "Dean of student",
            'description' => "Has a permission to control all tasks concerning with students over the college"
        ]);

        DB::table('roles')->insert([
            'name' => "Md",
            'display_name' => "Medical officer",
            'description' => "Has a role to verify the medical issues"
        ]);

        DB::table('roles')->insert([
            'name' => "Registry",
            'display_name' => "Registry",
            'description' => "Perform all tasks in the registry"
        ]);

    }

}
