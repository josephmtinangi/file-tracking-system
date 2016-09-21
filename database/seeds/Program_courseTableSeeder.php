<?php

use Illuminate\Database\Seeder;

class Program_courseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Program_courses')->insert([
            'program_id' => 3,
            'course_id' => 2
        ]);

        DB::table('Program_courses')->insert([
            'program_id' => 4,
            'course_id' => 2
        ]);

        DB::table('Program_courses')->insert([
            'program_id' => 5,
            'course_id' => 2
        ]);

        DB::table('Program_courses')->insert([
            'program_id' => 6,
            'course_id' => 2
        ]);

    }
}
