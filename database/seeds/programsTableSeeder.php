<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class programsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in Software Engineering',
            'code'=>'SE',
            'duration'=>'4',
            'department_id'=>'1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in Telecommuniction Engineering',
            'code'=>'TE',
            'duration'=>'4',
            'department_id'=>'1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in Computer Engineering',
            'code'=>'CE',
            'duration'=>'4',
            'department_id'=>'2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in computer',
            'code'=>'CS',
            'duration'=>'3',
            'department_id'=>'1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in computer Information Security',
            'code'=>'CIS',
            'duration'=>'3',
            'department_id'=>'1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in Business Information system',
            'code'=>'BIS',
            'duration'=>'3',
            'department_id'=>'1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in Health Information System',
            'code'=>'HIS',
            'duration'=>'3',
            'department_id'=>'2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);
        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in Information System',
            'code'=>'IS',
            'duration'=>'3',
            'department_id'=>'2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('programs')->insert([
            'name'=>'Bachelor of Science in Multimedia Technology',
            'code'=>'MTA',
            'duration'=>'3',
            'department_id'=>'3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
