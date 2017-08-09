<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parameter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Parameter', function(Blueprint $table){
            $table->increments('id');
            $table->String('Quality');
            $table->String('Price');
            $table->String('Service');
            $table->String('Delivery');
            $table->String('Policy');
            $table->String('HSE');
            $table->Integer('kerjasama_id')->unsigned();
            $table->date('updated_at');
            $table->date('created_at');

            $table->foreign('kerjasama_id')->references('id')->on('Kerjasama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Parameter');
        $table->dropForeign(['kerjasama_id']);
    }
}
