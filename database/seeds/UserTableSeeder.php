<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Db::table('users')->insert([
          'name' => 'Johan User',
          'email' => 'user@test.com',
          'password' => Hash::make('123456'),
        ]);
    }
}
