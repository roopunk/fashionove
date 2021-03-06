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
           'name' => $faker->name,
            'email' => $faker->unique()->email,
            'password'=>bcrypt('secret'),
        ]);
    }
}
