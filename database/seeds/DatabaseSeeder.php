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
<<<<<<< HEAD
        $this->call(ProgramTableSeeder::class);
=======
        $this->call(SchoolsTableSeeder::class);
>>>>>>> 83320f23c6070e4632c514ba7404ce398f273209
    }
}
