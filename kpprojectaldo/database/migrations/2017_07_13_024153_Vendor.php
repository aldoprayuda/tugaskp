<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vendor', function(Blueprint $table){
            $table->increments('id');
            $table->String('name');
            $table->String('phone');
            $table->String('address');
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
        Schema::dropIfExists('Vendor');
        $table->dropForeign(['customer_id']);
    }
}
