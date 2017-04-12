<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Country;
use Faker\Factory as FakerFactory;

class AddressTableSeeder extends Seeder
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

        // Preload the USA Country model.
        $country = Country::where('iso_code_2', 'US')->first();

        // Add a first random address to user with ID(1).
        $address = new Address();
        $address->customer()->associate(Customer::find(1));
        $address->line_1 = $faker->secondaryAddress;
        $address->line_2 = $faker->buildingNumber . ' ' . $faker->streetName;
        $address->town = $faker->city;
        $address->county = $faker->state;
        $address->postcode = $faker->postcode;
        $address->telephone = $faker->e164PhoneNumber;
        $address->country()->associate($country);
        $address->save();

        // Add a second random address to user with ID(1).
        $address = new Address();
        $address->customer()->associate(Customer::find(1));
        $address->line_1 = $faker->secondaryAddress;
        $address->line_2 = $faker->buildingNumber . ' ' . $faker->streetName;
        $address->town = $faker->city;
        $address->county = $faker->state;
        $address->postcode = $faker->postcode;
        $address->telephone = $faker->e164PhoneNumber;
        $address->country()->associate($country);
        $address->save();

        // Add a random address to user with ID(2).
        $address = new Address();
        $address->customer()->associate(Customer::find(2));
        $address->line_1 = $faker->secondaryAddress;
        $address->line_2 = $faker->buildingNumber . ' ' . $faker->streetName;
        $address->town = $faker->city;
        $address->county = $faker->state;
        $address->postcode = $faker->postcode;
        $address->telephone = $faker->e164PhoneNumber;
        $address->save();

        // Add a random address to user with ID(3).
        $address = new Address();
        $address->customer()->associate(Customer::find(3));
        $address->line_1 = $faker->secondaryAddress;
        $address->line_2 = $faker->buildingNumber . ' ' . $faker->streetName;
        $address->town = $faker->city;
        $address->county = $faker->state;
        $address->postcode = $faker->postcode;
        $address->telephone = $faker->e164PhoneNumber;
        $address->save();
    }
}
