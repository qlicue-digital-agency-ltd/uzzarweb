<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->double('buying_price');
            $table->double('selling_price');
            $table->bigInteger('quantity');
            $table->bigInteger('alert_quantity');
            $table->boolean('status');
            $table->double('unit_value');

            $table->bigInteger('supplier_id')->nullable();
            $table->bigInteger('unit_id');
            $table->bigInteger('product_id');


            $table->dateTime('expiry_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
