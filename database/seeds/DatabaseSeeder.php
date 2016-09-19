<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 20)->create();
        $this->call(CollegesTableSeeder::class);
        $this->call(ProgramTableSeeder::class);
    }
}
