<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class yearofstudy_semesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>1,
            'semester_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>1,
            'semester_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>2,
            'semester_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>2,
            'semester_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>3,
            'semester_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>3,
            'semester_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>4,
            'semester_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudy_semesters')->insert([
            'year_id'=>4,
            'semester_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
