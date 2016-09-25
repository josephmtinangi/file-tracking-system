<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'=>'ADAM JUSTAS SHEMU',
            'email'=>'adamshemu@gmail.com',
            'password'=>bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'=>'KHATIBU,MUNGIA HASSAAN',
            'email'=>'mungia@gmail.com',
            'password'=>bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'=>'KHADIJA,OMARY,HUSSEIN',
            'email'=>'tutydida@gmail.com',
            'password'=>bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
