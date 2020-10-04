<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainess', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->bigInteger('user_id')->unsigned(); 
            $table->bigInteger('courses_id')->unsigned(); 
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('courses_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainess');
    }
}
