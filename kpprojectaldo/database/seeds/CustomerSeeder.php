<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Customer')->insert([
        	'name' => 'PT. Pertamina Lubrican',
            'division' => 'freight forwarding',
        	'address' => 'Jakarta',
        	'phone' => '089655394777',
        	'email' => 'pl@yahoo.com',
        	'category' => 'Perminyakan',
            'status' => true,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('Customer')->insert([
            'name' => 'PT. Pos Indonesia',
            'division' => 'Postal Logistics ',
            'address' => 'Jakarta',
            'phone' => '0227807470',
            'email' => 'pl@yahoo.com',
            'category' => 'logistics',
            'status' => true,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('Customer')->insert([
            'name' => 'PT.Toyota',
            'division' => 'freight forwarding',
            'address' => 'Jakarta',
            'phone' => '089655394777',
            'email' => 'pl@yahoo.com',
            'category' => 'Otomotif',
            'status' => true,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('Customer')->insert([
            'name' => 'PT. Unilever ',
            'division' => 'Contract Logistics',
            'address' => 'Jakarta',
            'phone' => '089655394777',
            'email' => 'pl@yahoo.com',
            'category' => 'PaluGada',
            'status' => true,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
