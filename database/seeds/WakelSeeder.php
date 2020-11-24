<?php

use Illuminate\Database\Seeder;

class WakelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('wakels')->insert([
            'teacher_id' => '1',
            'name_teacher' => 'essa'
         ]);
    }
}
