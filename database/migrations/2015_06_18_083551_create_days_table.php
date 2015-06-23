<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days',function(Blueprint $table){
            $table->increments('id');
            $table->string('day');
        });

        DB::table('days')->insert([
            ['day'=>'Monday'],
            ['day'=>'Tuesday'],
            ['day'=>'Wednesday'],
            ['day'=>'Thursday'],
            ['day'=>'Friday'],
            ['day'=>'Saturday'],
            ['day'=>'Sunday']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('days');
    }
}
