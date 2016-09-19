<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colleges')->insert([
            'name' => 'College of Informatics and Virtual Education'
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Humanities and Social Sciences'
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Earth Sciences'
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Education'
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Health and Allied Sciences'
        ]);
        DB::table('colleges')->insert([
            'name' => 'College of Mathematics and Natural Sciences'
        ]);
    }
}
