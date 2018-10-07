<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->nullable();

            $table->integer('trade_action_id')->unsigned()->index();
            $table->foreign('trade_action_id')->references('id')->on('trade_actions');

            $table->integer('trade_id')->unsigned()->index();
            $table->foreign('trade_id')->references('id')->on('trades');

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
        Schema::dropIfExists('buys');
    }
}
