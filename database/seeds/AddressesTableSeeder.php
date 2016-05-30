<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        $users = User::all()->lists('id')->toArray();
        foreach (range(1, 20) as $index) {
        Db::table('addresses')->insert([
          'user_id' => $faker->randomElement($users),
          'firstname' => $faker->firstName,
          'lastname' => $faker->lastName,
          'postcode' => $faker->postcode,
          'address' => $faker->streetAddress,
          'city' => $faker->city,
          'country' => $faker->country,

        ]);
       }
    }
}
