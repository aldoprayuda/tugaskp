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

       DB::table('Vendor')->insert([
            'name' => 'PT. Arimbi Jaya Agung',
            'phone' => '0813-9426-3278  ',
            'address' => 'jakarta',
            'email' => 'pl@yahoo.com',
            'category' => 'Kendaraan',
            'status' => true,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

       DB::table('Vendor')->insert([
            'name' => 'PT. Daya Guna Motor Indonesia    ',
            'phone' => '0227807470',
            'address' => 'jakarta',
            'email' => 'pl@yahoo.com',
            'category' => 'kendaraan',
            'status' => true,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
