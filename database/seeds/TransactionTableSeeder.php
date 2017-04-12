<?php

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\Order;
use Faker\Factory as FakerFactory;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate a new data faker for this seeder.
        $faker = FakerFactory::create();

        // Create a concluded transaction (payment successful)
        $transaction = new Transaction();
        $transaction->order()->associate(Order::find(1));
        $transaction->amount_sterling = 8.00;
        $transaction->payment_gateway_sha256 = $faker->sha256;
        $transaction->status = 'paid';
        $transaction->save();

        // Create an unconcluded transaction (payment NOT successful)
        $transaction = new Transaction();
        $transaction->order()->associate(Order::find(2));
        $transaction->amount_sterling = 8.00;
        $transaction->payment_gateway_sha256 = $faker->sha256;
        $transaction->status = 'failed';
        $transaction->save();
    }
}
