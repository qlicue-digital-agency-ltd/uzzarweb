<?php

use App\Stock;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class StocksTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $stock = new Stock();
        $stock->name = "Kalimanjaro";
        $stock->unit_value = 1;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Kalimanjaro";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Kilimanjaro";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Hill Water";
        $stock->unit_value = 1;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Masafi";
        $stock->unit_value = 1;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Masafi";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Masafi";
        $stock->unit_value = 5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Uhai";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Uhai";
        $stock->unit_value = 1;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Uhai";
        $stock->unit_value = 1.6;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Uhai";
        $stock->unit_value = 6;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Uhai";
        $stock->unit_value = 12;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Afya";
        $stock->unit_value = 1;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Afya";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Afya";
        $stock->unit_value = 6;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Afya";
        $stock->unit_value = 12;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Dasani";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Dasani";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 10;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Pepsi";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Pepsi Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Pepsi Take Away";
        $stock->unit_value = 2.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Pepsi Diet Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Milinda Orange";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Milinda Blackcurrant";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "7Up";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Pepsi Diet";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Mountain Dew";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Evervess";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Pepsi Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Pepsi Take Away";
        $stock->unit_value = 2.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Milinda Blackcurrant Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Milinda Orange Take Away";
        $stock->unit_value = 2.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "7Up Take Away";
        $stock->unit_value = 2.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Sprite";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Fanta Orange";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Fanta Passion";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Fanta Pineapple";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Fanta Blackcurrant";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Sparletta";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Stone Tangawizi";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Krest Bitterlemon";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Krest Soda water";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Cocacola Diet";
        $stock->unit_value = 350;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Cocacola Take Away";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Cocacola Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Cocacola Take Away";
        $stock->unit_value = 1.2;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Cocacola Take Away";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        ////
        $stock = new Stock();
        $stock->name = "Sprite Take Away";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Sprite Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Sprite Take Away";
        $stock->unit_value = 1.2;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Sprite Take Away";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        /////
        $stock = new Stock();
        $stock->name = "Fanta Orange Take Away";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Orange Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Orange Take Away";
        $stock->unit_value = 1.2;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Orange Take Away";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        /////
        $stock = new Stock();
        $stock->name = "Fanta Pineapple Take Away";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Pineapple Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Pineapple Take Away";
        $stock->unit_value = 1.2;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Pineapple Take Away";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        /////
        $stock = new Stock();
        $stock->name = "Fanta Passion Take Away";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Passion Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Passion Take Away";
        $stock->unit_value = 1.2;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Fanta Passion Take Away";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        /////
        $stock = new Stock();
        $stock->name = "Sparleta Take Away";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Sparleta Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Sparleta Take Away";
        $stock->unit_value = 1.2;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();


        $stock = new Stock();
        $stock->name = "Sparleta Take Away";
        $stock->unit_value = 1.5;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Stone Tangawizi Take Away";
        $stock->unit_value = 500;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Cocacola Zero Take Away";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Cocacola Zero Take Away";
        $stock->unit_value = 1.25;
        $stock->unit_id = 4;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 12;
        $stock->save();

        ///

        $stock = new Stock();
        $stock->name = "Miwa";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Embe";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Ukwaju";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Parachichi";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Nanasi";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Tende";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Stafeli";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Mix Fruits";
        $stock->unit_value = 1;
        $stock->unit_id = 8;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 11;
        $stock->save();

        ///
        $stock = new Stock();
        $stock->name = "Azam Energy";
        $stock->unit_value = 300;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Azam Energy";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Mo Energy";
        $stock->unit_value = 400;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Red Bull";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Power Energy";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Gold Energy";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Green Energy";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Monster";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "X-tra Energy";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Dragon Energy";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        $stock = new Stock();
        $stock->name = "KungFu Energy";
        $stock->unit_value = 250;
        $stock->unit_id = 5;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 8;
        $stock->save();

        ///food .........
        $stock = new Stock();
        $stock->name = "Chipsi Kavu";
        $stock->unit_value = 1;
        $stock->unit_id = 6;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 1;
        $stock->save();



        //->kuku
        $stock = new Stock();
        $stock->name = "Kuku Mzima";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 2;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Kuku Nusu";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 2;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Kuku Robo";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 2;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Firigisi";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 2;
        $stock->save();

        //->mayai
        $stock = new Stock();
        $stock->name = "Mayai ya Kienyeji";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 4;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Mayai ya Kizungu";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 4;
        $stock->save();

        //->Samaki
        $stock = new Stock();
        $stock->name = "Kibua";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 7;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Sato";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 7;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Kamongo";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 7;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Kambale";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 7;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Perege";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 7;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Ngisi";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 7;
        $stock->save();

        //->Ndizi 

        $stock = new Stock();
        $stock->name = "Mzuzu";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 6;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Bukoba";
        $stock->unit_value = 1;
        $stock->unit_id = 6;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 6;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Mshale";
        $stock->unit_value = 1;
        $stock->unit_id = 6;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 6;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Malindi";
        $stock->unit_value = 1;
        $stock->unit_id = 6;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 6;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Mkono wa Tembo";
        $stock->unit_value = 1;
        $stock->unit_id = 6;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 6;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Kisukari";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 6;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Jamaika";
        $stock->unit_value = 1;
        $stock->unit_id = 6;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 6;
        $stock->save();

        //->mishikaki
        $stock = new Stock();
        $stock->name = "Ng'ombe";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 5;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Kuku";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 5;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Samaki";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 5;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Mbuzi";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 5;
        $stock->save();


//->Nyama choma
        $stock = new Stock();
        $stock->name = "Mbuzi";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 3;
        $stock->save();

        $stock = new Stock();
        $stock->name = "Ng'ombe";
        $stock->unit_value = 1;
        $stock->unit_id = 9;
        $stock->buying_price = 0;
        $stock->selling_price = 0;
        $stock->quantity = 0;
        $stock->alert_quantity = 10;
        $stock->status = true;
        $stock->supplier_id = 0;
        $stock->expiry_date = Carbon::now();
        $stock->product_id = 3;
        $stock->save();


        //stock za skoni shop
    }
}
