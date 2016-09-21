<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Departments')->insert([
           'name' =>'Computer Science',
            'code' =>'CS',
            'school_id'=> 1
        ]);
        DB::table('Departments')->insert([
            'name' =>'Telecomunation Engineering',
            'code' =>'TE',
            'school_id'=>2
        ]);
        DB::table('Departments')->insert([
            'name' =>'Software Engineering',
            'code' =>'SE',
            'school_id'=> 2
        ]);

    }
}
