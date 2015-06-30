<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentTypeForeignKeyToStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores',function(Blueprint $table){
           $table->foreign('payment_type')
               ->references('id')
               ->on('payment_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores',function(Blueprint $table){
            $table->dropForeign('stores_payment_type_foreign');
        });
    }
}
