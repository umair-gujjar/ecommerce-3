<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\Address;

class OrderAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add delivery address to order ID(1).
        $order = Order::find(1);
        $customerAddressCollection = $order->customer->addresses;
        $deliveryAddress = $customerAddressCollection[0];
        $billingAddress = $customerAddressCollection[1];

        $orderAddress = new OrderAddress();
        $orderAddress->order()->associate($order);
        $orderAddress->type = 'delivery';
        $orderAddress->line_1 = $deliveryAddress->line_1;
        $orderAddress->line_2 = $deliveryAddress->line_2;
        $orderAddress->line_3 = $deliveryAddress->line_3;
        $orderAddress->line_4 = $deliveryAddress->line_4;
        $orderAddress->town = $deliveryAddress->town;
        $orderAddress->county = $deliveryAddress->county;
        $orderAddress->postcode = $deliveryAddress->postcode;
        $orderAddress->country = $deliveryAddress->country;
        $orderAddress->telephone = $deliveryAddress->telephone;
        $orderAddress->save();
    }
}
