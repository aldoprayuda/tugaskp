<?php

use Illuminate\Database\Seeder;

class KerjaSamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('KerjaSama')->insert([
        	'awal_mulai' =>  'Januari',
        	'berakhir' => 'Desember',
        	'vendor_id' => '1',
        	'customer_id' => '1',
        	'rata-rata' => '55',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
