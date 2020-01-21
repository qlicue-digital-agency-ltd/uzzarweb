<?php

use App\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = new Package();
        $package->name = "Mikumi";
        $package->amount = "50000";
        $package->commision = "12000";
        $package->save();

        $package = new Package();
        $package->name = "Manyara";
        $package->amount = "75000";
        $package->commision = "25000";
        $package->save();

        $package = new Package();
        $package->name = "Ngorongoro";
        $package->amount = "120000";
        $package->commision = "35000";
        $package->save();

        $package = new Package();
        $package->name = "Serengeti";
        $package->amount = "250000";
        $package->commision = "45000";
        $package->save();
    }
}
