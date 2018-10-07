<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tels', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tel',80)->unique();
            $table->boolean('default')->default(false);

            $table->integer('info_box_id')->unsigned()->nullable();
            $table->foreign('info_box_id')->references('id')->on('info_boxes');

            $table->integer('info_id')->unsigned()->nullable();
            $table->foreign('info_id')->references('id')->on('infos');

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
        Schema::dropIfExists('tels');
    }
}
