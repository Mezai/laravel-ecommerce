<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(ShopTableSeeder::class);
    }
}
