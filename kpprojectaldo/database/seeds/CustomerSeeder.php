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
    }
}
