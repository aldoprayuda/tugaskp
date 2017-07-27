<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerSeeder::class);
        $this->call(VendorSeeder::class);
        $this->call(KerjaSamaSeeder::class);
        $this->call(ParameterSeeder::class);
        $this->call(LoginSeeder::class);
    }
}