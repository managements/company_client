<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ht');
            $table->integer('tva');
            $table->integer('ttc');
            $table->integer('profit');
            $table->integer('taxes')->default(false);
            $table->integer('profit_after_taxes');
            $table->boolean('selected')->default(false);


            $table->integer('sale_id')->unsigned()->index();
            $table->foreign('sale_id')->references('id')->on('sales');


            $table->integer('buy_id')->unsigned()->index();
            $table->foreign('buy_id')->references('id')->on('buys');


            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients');


            $table->integer('provider_id')->unsigned()->index();
            $table->foreign('provider_id')->references('id')->on('providers');

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
        Schema::dropIfExists('dvs');
    }
}
