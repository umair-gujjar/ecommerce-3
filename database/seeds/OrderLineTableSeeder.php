<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Customer;
use App\Models\Product;
use Faker\Factory as FakerFactory;

class OrderLineTableSeeder extends Seeder
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

        // Add single order line to order ID(1).
        $orderLine = new OrderLine();
        $orderLine->order()->associate(Order::find(1));
        $orderLine->product_sku = Product::find(1)->sku;
        $orderLine->product_name = Product::find(1)->name;
        $orderLine->product_price_sterling = Product::find(1)->price_sterling;
        $orderLine->quantity = 1;
        $orderLine->subtotal_sterling = 5.00;
        $orderLine->save();


        // Add two order lines to order ID(2).
        $order = Order::find(2);

        // Add first order line to order ID(2).
        $product = Product::find(1);
        $orderLine = new OrderLine();
        $orderLine->order()->associate($order);
        $orderLine->product_sku = $product->sku;
        $orderLine->product_name = $product->name;
        $orderLine->product_price_sterling = $product->price_sterling;
        $orderLine->quantity = 1;
        $orderLine->subtotal_sterling = 5.00;
        $orderLine->save();

        // Add second order line to order ID(2).
        $product = Product::find(3);
        $orderLine = new OrderLine();
        $orderLine->order()->associate($order);
        $orderLine->product_sku = $product->sku;
        $orderLine->product_name = $product->name;
        $orderLine->product_price_sterling = $product->price_sterling;
        $orderLine->quantity = 2;
        $orderLine->subtotal_sterling = 20.00;
        $orderLine->save();
    }
}
