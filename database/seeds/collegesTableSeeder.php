<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class collegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('colleges')->insert([
            'name' => 'College of Informatics and Virtual Education',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Humanities and Social Sciences',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Earth Sciences',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Education',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Health and Allied Sciences',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Mathematics and Natural Sciences',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
