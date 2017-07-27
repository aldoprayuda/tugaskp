<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kerjasama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kerjasama', function(Blueprint $table){
            $table->increments('id');
            $table->String('awal_mulai');
            $table->String('berakhir')->nullable();
            $table->integer('vendor_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('ratarata')->nullable();
            $table->date('updated_at');
            $table->date('created_at');

            $table->foreign('vendor_id')->references('id')->on('Vendor');
            $table->foreign('customer_id')->references('id')->on('Customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kerjasama');
        $table->dropForeign(['vendor_id']);
        $table->dropForeign(['customer_id']);
    }
}
