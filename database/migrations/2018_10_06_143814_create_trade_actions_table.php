<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_actions', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('done')->default(false);
            $table->dateTime('done_time')->nullable();
            $table->integer('done_member_id')->unsigned()->index();
            $table->foreign('done_member_id')->references('id')->on('members');

            $table->boolean('delivery')->default(false);
            $table->dateTime('delivery_time')->nullable();
            $table->integer('delivery_member_id')->unsigned()->index();
            $table->foreign('delivery_member_id')->references('id')->on('members');

            $table->boolean('store')->default(false);
            $table->dateTime('store_time')->nullable();
            $table->integer('store_member_id')->unsigned()->index();
            $table->foreign('store_member_id')->references('id')->on('members');

            $table->string('bl')->nullable()->unique();
            $table->dateTime('bl_time')->nullable();
            $table->integer('bl_member_id')->unsigned()->index();
            $table->foreign('bl_member_id')->references('id')->on('members');

            $table->string('fc')->nullable()->unique();
            $table->dateTime('fc_time')->nullable();
            $table->integer('fc_member_id')->unsigned()->index();
            $table->foreign('fc_member_id')->references('id')->on('members');

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
        Schema::dropIfExists('trade_actions');
    }
}
