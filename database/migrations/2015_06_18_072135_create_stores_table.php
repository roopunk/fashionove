<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores',function(Blueprint $table){
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->integer('payment_type')->unsigned();
            $table->string('store_name');
            $table->text('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('opening_time');
            $table->string('closing_time');
            $table->string('highlights');
            $table->timestamps();

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stores');
    }
}
