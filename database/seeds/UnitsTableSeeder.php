<?php

use App\Unit;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $unit = new Unit();
        $unit->name = "KILOGRAMS";
        $unit->si_unit = "Kg";
        $unit->save();

        $unit = new Unit();
        $unit->name = "GRAMS";
        $unit->si_unit = "gm";
        $unit->save();

        $unit = new Unit();
        $unit->name = "MILLIGRAMS";
        $unit->si_unit = "mg";
        $unit->save();

        $unit = new Unit();
        $unit->name = "LITRE";
        $unit->si_unit = "l";
        $unit->save();

        $unit = new Unit();
        $unit->name = "MILLITRE";
        $unit->si_unit = "ml";
        $unit->save();

        $unit = new Unit();
        $unit->name = "PLATE";
        $unit->si_unit = "per plate";
        $unit->save();

        $unit = new Unit();
        $unit->name = "Box";
        $unit->si_unit = "per box";
        $unit->save();

        $unit = new Unit();
        $unit->name = "GLASS";
        $unit->si_unit = "per glass";
        $unit->save();

        $unit = new Unit();
        $unit->name = "PIECE";
        $unit->si_unit = "per piece";
        $unit->save();
    }
}
