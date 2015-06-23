<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFashionoveReviewRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fashionove_rating',function(Blueprint $table){
            $table->increments('id');
            $table->integer('store_id')->unsigned();
            $table->integer('quality');
            $table->integer('variety');
            $table->integer('experience');
            $table->text('review');
            $table->timestamps();

            $table->foreign('store_id')
                ->references('id')
                ->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fashionove_rating');
    }
}
