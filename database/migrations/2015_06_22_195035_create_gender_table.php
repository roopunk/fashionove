<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders',function(Blueprint $table){
            $table->increments('id');
            $table->string('gender_name',5);
        });

        DB::table('genders')->insert([
            ['gender_name'=>'Men'],
            ['gender_name'=>'Women']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('genders');
    }
}
