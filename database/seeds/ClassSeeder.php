<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('classes')->insert([
         	'class_id'   => '1',
         	'name_class' => '10',
         	'major'      => 'rpl'
         ]);    }
}
