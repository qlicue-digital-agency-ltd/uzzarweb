<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///products for kiepe shop
        //-> food (kiepe shop)
        $product = new Product();
        $product->name = "CHIPSI";
        $product->status = true;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "KUKU";
        $product->status = true;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "NYAMA CHOMA";
        $product->status = true;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "MAYAI";
        $product->status = true;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "MISHIKAKI";
        $product->status = true;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "NDIZI";
        $product->status = true;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "SAMAKI";
        $product->status = true;
        $product->category_id = 1;
        $product->save();

        //->soft drinks (kiepe shop)
        $product = new Product();
        $product->name = "ENERGY DRINK";
        $product->status = true;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = "JUICE";
        $product->status = true;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = "MAJI";
        $product->status = true;
        $product->category_id = 2;
        $product->save();


        $product = new Product();
        $product->name = "NATURAL JUICE";
        $product->status = true;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = "SODA";
        $product->status = true;
        $product->category_id = 2;
        $product->save();
    }
}
