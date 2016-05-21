<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
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
            DB::table('products')->insert([
            'title' => $faker->sentence(5),
            'description' => $faker->paragraph(3),
            'price' => $faker->numberBetween(20, 100),
            'active' => $faker->boolean(50),
            'reference' => $faker->numberBetween(1, 20),
            'created_at' => $faker->dateTime('now')

          ]);
        }
    }
}
