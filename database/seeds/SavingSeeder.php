<?php

use Illuminate\Database\Seeder;

class SavingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('savings')->insert([
         	'tabungan_id'     => '1234567',
         	'tgl_menabung'    => '19-10-10',
         	'nominal'         => '1234',
         	'tgl_pengambilan' => '12-09-10',
         	'total'           => '123345'
         ]);
    }
}
