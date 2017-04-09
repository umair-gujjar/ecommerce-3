<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Add registered customer 1:
    	$user = User::where('email', 'woodyj888@googlemail.com')->first();
        $customer = new Customer();
        $customer->user()->associate($user);
        $customer->title = 'Mr';
        $customer->first_name = 'James';
        $customer->last_name = 'Wood';
        $customer->save();

        // Add registered customer 2:
        $user = User::where('email', 'jane.austin@example.org')->first();
        $customer = new Customer();
        $customer->user()->associate($user);
        $customer->title = 'Mrs';
        $customer->first_name = 'Jane';
        $customer->last_name = 'Austin';
        $customer->save();

        // Add guest customer:
        $customer = new Customer();
        $customer->title = 'Miss';
        $customer->first_name = 'Penny';
        $customer->last_name = 'Parker';
        $customer->save();
    }
}
