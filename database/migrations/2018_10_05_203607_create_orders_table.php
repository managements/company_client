<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pu');
            $table->integer('qt');
            $table->integer('ht');
            $table->integer('tva');
            $table->integer('ttc');
            $table->integer('profit');
            $table->integer('taxes')->default(false);
            $table->integer('profit_after_taxes');

            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('dv_id')->unsigned()->index();
            $table->foreign('dv_id')->references('id')->on('dvs');

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
        Schema::dropIfExists('orders');
    }
}
