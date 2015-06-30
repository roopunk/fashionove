<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name'=>'Formal Shirts','gender_id'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Casual Shirts','gender_id'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Kurta','gender_id'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Daily Wear','gender_id'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Ethnics','gender_id'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Formal Shirt','gender_id'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Vintage','gender_id'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Kurti','gender_id'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
            ['category_name'=>'Ethnics','gender_id'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
        ]);
    }
}
