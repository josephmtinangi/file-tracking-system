<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class yearofstudysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yearofstudys')->insert([
            'name'=>'year one',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudys')->insert([
            'name'=>'year two',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudys')->insert([
            'name'=>'year three',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('yearofstudys')->insert([
            'name'=>'year four',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
