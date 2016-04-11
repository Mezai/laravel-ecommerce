<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
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
            Db::table('categories')->insert([
              'title' => $faker->sentence(5),
              'description' => $faker->paragraph(3),
              'active' => $faker->boolean(50),
              'created_at' => $faker->dateTime('now')
            ]);
        }
    }
}
