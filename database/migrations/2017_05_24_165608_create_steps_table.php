<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->increments('id');
            // telegram reference message id
            $table->integer('message_id');
            // step number
            $table->smallInteger('step');
            // step 1 - credit / debit
            $table->boolean('credit')->nullable();
            // step 2 - to who
            $table->integer('to_user_id')->unsigned()->nullable();
            $table->foreign('to_user_id')->references('id')->on('users');
            // user's user id who is using the bot
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('steps');
    }
}
