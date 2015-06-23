<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands',function(Blueprint $table){
            $table->increments('id');
            $table->integer('brand_type_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('brand_name');
            $table->text('description');
            $table->string('logo');
            $table->string('video');
            $table->timestamps();

            $table->foreign('brand_type_id')
                ->references('id')
                ->on('brand_types');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
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
        Schema::drop('brands');
    }
}
