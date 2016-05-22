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

        foreach (range(1, 10) as $index) {
        
        ($index % 2) ? $gender = 'male' : $gender = 'female';
        
        Db::table('users')->insert([
            'name' => $faker->unique()->name($gender),
            'username' => $faker->unique()->userName(),
            'email' => $faker->unique()->email,
            'password' => Hash::make('123456')
        ]);

        }
    }
}
