<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class studentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'regno'=>'T/UDOM/2013/04691',
            'user_id'=>1,
            'program_id'=>1,
            'yearofstudy'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('students')->insert([
            'regno'=>'T/UDOM/2014/04000',
            'user_id'=>2,
            'program_id'=>2,
            'yearofstudy'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
