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
        $this->call(usersTableSeeder::class);
        $this->call(collegesTableSeeder::class);
        $this->call(schoolsTableSeeder::class);
        $this->call(departmentsTableSeeder::class);
        $this->call(programsTableSeeder::class);
        $this->call(coursesTableSeeder::class);
        $this->call(program_coursesTableSeeder::class);
        $this->call(semesterTableSeeder::class);
        $this->call(yearofstudysTableSeeder::class);
        $this->call(yearofstudy_semesterTableSeeder::class);
        $this->call(studentsTableSeeder::class);

    }
}
