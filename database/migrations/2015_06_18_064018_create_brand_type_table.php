<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_types',function(Blueprint $table){
            $table->increments('id');
            $table->string('type_name');
            $table->timestamps();
        });

        DB::table('brand_types')->insert([
            ['type_name' => 'Executive'],
            ['type_name' => 'Premium'],
            ['type_name' => 'Luxury']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brand_types');
    }
}
