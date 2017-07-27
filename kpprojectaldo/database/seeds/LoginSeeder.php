<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Login')->insert([
        	'Username' => 'corneliusaldo',
        	'Password' => 'kyubi210596',
        	'createDate' => Carbon::now()
        	
        ]);
    }
}
