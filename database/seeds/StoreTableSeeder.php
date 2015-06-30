<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<20; $i++) {
            DB::table('stores')->insert([
                [
                    'brand_id' => rand(1, 10),
                    'payment_type' => rand(1, 3),
                    'store_name' => $faker->company . ' Store',
                    'address' => $faker->address,
                    'latitude' => $faker->latitude,
                    'longitude' => $faker->longitude,
                    'opening_time' => (10 + rand(1, 3)),
                    'closing_time' => (20 + rand(1, 3)),
                    'highlights' => 'Ready made',
                    'price_range' => (1000 + rand(100, 600)) . '-' . (10000 + rand(1500, 1900)),
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]
            ]);
        }
    }
}
