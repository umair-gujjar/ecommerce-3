<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Books';
        $category->save();

        $category = new Category();
        $category->name = 'DVDs';
        $category->save();

        $category = new Category();
        $category->name = 'Kitchen';
        $category->save();

        $category = new Category();
        $category->name = 'Bathroom';
        $category->save();
    }
}
