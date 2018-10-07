<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand',80)->unique()->nullable();
            $table->string('name',40)->unique();
            $table->string('slug',60)->unique();
            $table->string('licence',30)->unique()->nullable();
            $table->string('turnover',20)->nullable();
            $table->integer('taxes')->nullable();
            $table->string('fax')->nullable();
            $table->string('speaker',20)->nullable();
            $table->string('address',50)->nullable();
            $table->integer('build')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('apt_nbr')->nullable();

            $table->integer('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities');

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
        Schema::dropIfExists('info_boxes');
    }
}
