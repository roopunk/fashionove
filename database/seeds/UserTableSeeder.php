<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
          // 'name' => $faker->name,
            'first_name' => $faker->firstName ,
            'last_name' => $faker->lastName,
            'mobile' =>$faker->phoneNumber,
            'is_admin'=>1,
            'email' => 'example@admin.com',
            'password' =>bcrypt('secret'),
        ]);
    }
}
