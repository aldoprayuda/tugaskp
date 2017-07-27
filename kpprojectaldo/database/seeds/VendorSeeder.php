<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('Vendor')->insert([
        	'name' => 'PT. Menara Data Centra',
        	'phone' => '02179187088',
        	'address' => 'Jl. Mampang Prapatan VIII No.09 Jakarta 12790',
        	'email' => 'pl@yahoo.com',
        	'category' => 'Perminyakan',
            'status' => true,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
