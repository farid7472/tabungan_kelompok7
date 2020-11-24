<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('students')->insert([
         	'nik_student'  => '12345678',
         	'name_student' => 'yuliawati'
         ]);
    }
}
