<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique()->index();
            $table->string('name')->unique();

            $table->integer('user_id')->unsigned()->unique()->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('info_id')->unsigned()->unique()->index();
            $table->foreign('info_id')->references('id')->on('info');

            $table->integer('premium_id')->unsigned()->unique()->index();
            $table->foreign('premium_id')->references('id')->on('premiums');

            $table->integer('company_id')->unsigned()->index();
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('members');
    }
}
