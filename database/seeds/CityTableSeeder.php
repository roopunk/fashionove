<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
           ['city_name'=>'Kolkata', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
        ]);
    }
}
