<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class schoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'name' => 'School of Informatics',
            'college_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schools')->insert([
            'name' => 'School of Virtual Education',
            'college_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
