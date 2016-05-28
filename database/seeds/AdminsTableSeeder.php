<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Db::table('admins')->insert([
          'name' => 'Johan Admin',
          'email' => 'admin@test.com',
          'password' => Hash::make('123456'),
        ]);
    }
}
