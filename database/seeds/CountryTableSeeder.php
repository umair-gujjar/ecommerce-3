<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country();
        $country->name = 'United Kingdom';
        $country->iso_code_2 = 'UK';
        $country->save();

        $country = new Country();
        $country->name = 'United States';
        $country->iso_code_2 = 'US';
        $country->save();
    }
}
