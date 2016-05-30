<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
        	DB::table('currencies')->insert([
        		'name' => $faker->name,
        		'iso_code' => $faker->currencyCode,
        		'active' => $faker->boolean(50),
        	]);

        }
    }
}
