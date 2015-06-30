<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_types',function(Blueprint $table){
            $table->increments('id');
            $table->string('type_name');
        });
        DB::table('payment_types')->insert([
            ['type_name' => 'Cash'],
            ['type_name' => 'Credit/Debit Card'],
            ['type_name' => 'Cash, Credit/Debit Card']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_types');
    }
}
