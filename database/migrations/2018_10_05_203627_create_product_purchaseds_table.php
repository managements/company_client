<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPurchasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchaseds', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pu');
            $table->integer('qt');
            $table->integer('ht');
            $table->integer('tva');
            $table->integer('ttc');

            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('order_id')->unsigned()->index();
            $table->foreign('order_id')->references('id')->on('orders');

            $table->integer('accounting_id')->unsigned()->index();
            $table->foreign('accounting_id')->references('id')->on('accountings');

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
        Schema::dropIfExists('product_purchaseds');
    }
}
