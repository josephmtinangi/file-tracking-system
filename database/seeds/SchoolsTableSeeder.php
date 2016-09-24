<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
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
            'college_id' => 1
        ]);

        DB::table('schools')->insert([
            'name' => 'School of Virtual Education',
            'college_id' => 1
        ]);
    }
}
