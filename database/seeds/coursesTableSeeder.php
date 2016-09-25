<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class coursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('courses')->insert([
            'name' => 'Introduction to High Level Programming',
            'code' => 'CS 110',
            'program_id' => 3,
            'credit' => 10
        ]);

        DB::table('courses')->insert([
            'name' => 'Introduction Electronics Engineering',
            'code' => 'TN 123',
            'program_id' => 3,
            'credit' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Data Mining',
            'code' => 'CS 312',
            'program_id' => 3,
            'credit' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('courses')->insert([
            'name' => 'Software development 2',
            'code' => 'CS 221',
            'program_id' => 3,
            'credit' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
