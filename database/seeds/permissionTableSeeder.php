<?php

use Illuminate\Database\Seeder;

class permissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission')->insert([
           'name' => "Approve",
            'display_name' => "Approve",
            'description' => "Approve the requests from the student"
        ]);

        DB::table('permission')->insert([
            'name' => "View",
            'display_name' => "View",
            'description' => "View all students"
        ]);

        DB::table('permission')->insert([
            'name' => "Write",
            'display_name' => "Write",
            'description' => "Student can write anything"
        ]);
    }
}
