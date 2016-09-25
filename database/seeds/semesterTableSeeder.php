<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class semesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            'name'=>'Semester one',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('semesters')->insert([
            'name'=>'Semester two',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
