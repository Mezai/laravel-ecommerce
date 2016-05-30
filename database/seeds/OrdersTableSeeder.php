<?php


use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\User;

class OrdersTableSeeder extends Seeder
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
            DB::table('orders')->insert([
            'total_paid' => $faker->numberBetween(20, 200),
            'payment' => $faker->company(),
            'valid' => $faker->boolean(50),
            'user_id' => $faker->randomElement($users),
            'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => $faker->dateTimeBetween('-2 years', 'now')

          ]);
        }
      
    }
}
