<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesToStoreMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_to_stores_map',function(Blueprint $table){
            $table->increments('id');
            $table->integer('store_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('start_price');
            $table->string('end_price');
            $table->timestamps();

            $table->foreign('store_id')
                ->references('id')
                ->on('stores');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories_to_stores_map');
    }
}
