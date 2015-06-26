<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFewColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidl
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->dropColumn('name');
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('mobile')->after('last_name');
            $table->enum('sex',['','male','female'])->after('mobile');
            $table->boolean('is_admin')->defaut(false)->after('sex');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){

            //$table->string('name');

            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('sex');
            $table->dropColumn('mobile');
            $table->dropColumn('is_admin');
        });
    }
}

