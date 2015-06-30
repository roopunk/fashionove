<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++) {
            DB::table('brands')->insert([
                [
                    'brand_type_id' => rand(1, 3),
                    'city_id' => 1,
                    'Brand_name' => $faker->company,
                    'description' => $faker->sentence(20),
                    'logo' => $faker->imageUrl(200, 200, null, true),
                    'video' => $faker->imageUrl(480, 620, null, true),
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]
            ]);
        }
    }
}
