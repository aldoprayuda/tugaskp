<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function(Blueprint $table){
            $table->increments('id');
            $table->String('name');
            $table->String('division');
            $table->String('address');
            $table->String('phone');
            $table->String('email');
            $table->String('category');
            $table->boolean('status');
            $table->date('updated_at');

            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customer');
    }
}
