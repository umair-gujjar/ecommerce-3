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
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderLineTableSeeder::class);
        $this->call(OrderAddressTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
    }
}
