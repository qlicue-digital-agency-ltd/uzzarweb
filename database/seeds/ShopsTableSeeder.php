<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = new Shop();
        $shop->name = "PHAMARNCY";
        $shop->save();

        $shop = new Shop();
        $shop->name = "HARDWARE";
        $shop->save();

        $shop = new Shop();
        $shop->name = "PEMBEJEO";
        $shop->save();

        $shop = new Shop();
        $shop->name = "SPARE";
        $shop->save();

        $shop = new Shop();
        $shop->name = "SPORTS WARE";
        $shop->save();

        $shop = new Shop();
        $shop->name = "LIQUOR STORE";
        $shop->save();

        $shop = new Shop();
        $shop->name = "MINI SUPER MARKET";
        $shop->save();

        $shop = new Shop();
        $shop->name = "FURNITURE";
        $shop->save();

        $shop = new Shop();
        $shop->name = "BAR";
        $shop->save();

        $shop = new Shop();
        $shop->name = "GENGE (SOKONI)";
        $shop->save();

        $shop = new Shop();
        $shop->name = "KIEPE (CHIPS)";
        $shop->save();

        $shop = new Shop();
        $shop->name = "HOME APPLIANCE";
        $shop->save();

        $shop = new Shop();
        $shop->name = "UREMBO & MANUKATO";
        $shop->save();

        $shop = new Shop();
        $shop->name = "SIMU";
        $shop->save();

        $shop = new Shop();
        $shop->name = "NGUO (MAVAZI)";
        $shop->save();

        $shop = new Shop();
        $shop->name = "RETAIL (BIDHAA ZA REJA REJA)";
        $shop->save();

        $shop = new Shop();
        $shop->name = "COMPUTER";
        $shop->save();

        $shop = new Shop();
        $shop->name = "VIATU";
        $shop->save();

        $shop = new Shop();
        $shop->name = "BABY-SHOP";
        $shop->save();

        $shop = new Shop();
        $shop->name = "JEWELS";
        $shop->save();

        $shop = new Shop();
        $shop->name = "BUTCHERY";
        $shop->save();

        $shop = new Shop();
        $shop->name = "NGUO ZA NDANI ZA KIKE";
        $shop->save();
    }
}
