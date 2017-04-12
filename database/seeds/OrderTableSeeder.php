<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;
use Faker\Factory as FakerFactory;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Preload a data faker.
        $faker = FakerFactory::create();

        // Create first order.
        $order = new Order();
        $order->customer()->associate(Customer::find(1));
        $order->uid = $faker->ean8;
        $order->subtotal_sterling = 5.00;
        $order->tax_sterling = 1.00;
        $order->shipping_sterling = 2.00;
        $order->total_sterling = 8.00;
        $order->save();

        // Create second order.
        $order = new Order();
        $order->customer()->associate(Customer::find(2));
        $order->uid = $faker->ean8;
        $order->subtotal_sterling = 25.00;
        $order->tax_sterling = 3.00;
        $order->shipping_sterling = 5.00;
        $order->total_sterling = 33.00;
        $order->save();
    }
}
