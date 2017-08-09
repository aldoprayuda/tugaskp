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
        	'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
