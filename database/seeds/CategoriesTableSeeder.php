<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///Category for kiepe (Chips) shop 
        $category = new Category();
        $category->name = "FOOD";
        $category->status = true;
        $category->shop_id = 11;
        $category->save();

        $category = new Category();
        $category->name = "SOFT DRINK";
        $category->status = true;
        $category->shop_id = 11;
        $category->save();
    }
}
