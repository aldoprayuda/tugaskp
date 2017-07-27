<?php

use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Parameter')->insert([
        	'Quality' => '30',
        	'Price' => '50',
        	'Service' => '20',
        	'Delivery' => '100',
        	'Policy' => '80',
        	'HSE' => '50',
        	'kerjasama_id' => '1'
    	]);
    	
    }
}
