<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnginesToCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engines_to_car', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('engine_id');
            $table->unsignedBigInteger('car_id');
            $table->timestamps();
            $table->foreign('engine_id')->references('id')->on('engines');
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engines_to_car');
    }
}
