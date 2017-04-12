<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add a product to the Books category
        $product = new Product();
        $product->sku = '123456';
        $product->name = 'Harry\'s a Pot-head and the Philosopher\'s Stoned!';
        $product->description = 'Harry let\'s his hair down and takes it real easy. Dumbledore still pretends like he knows everything that\'s going on.  Ron is just... Ron!';
        $product->price_sterling = 5.00;
        $product->save();

        $category = Category::where('name', 'Books')->first();
        $product->categories()->attach($category);

        // Add a product to the DVDs category
        $product = new Product();
        $product->sku = '234567';
        $product->name = 'Saving Private Ryan';
        $product->description = 'Tom Hanks stars in this moving World War Two epic, and is sent on a mission to bring back the last surviving brother from the Ryan family.';
        $product->price_sterling = 7.00;
        $product->save();

        $category = Category::where('name', 'DVDs')->first();
        $product->categories()->attach($category);

        // Add a product to Kitchen and Bathroom categories
        $product = new Product();
        $product->sku = '345678';
        $product->name = 'Soap dispenser';
        $product->description = 'Press the top... Soap comes out. What more do you need to know?';
        $product->price_sterling = 10.00;
        $product->save();

        $categories = Category::whereIn('name', ['Kitchen', 'Bathroom'])->get();
        $product->categories()->attach($categories);
    }
}
