<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyworksToCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodyworks_to_car', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bodywork_id');
            $table->unsignedBigInteger('car_id');
            $table->timestamps();
            
            $table->foreign('bodywork_id')->references('id')->on('bodyworks');
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
        Schema::dropIfExists('bodyworks_to_car');
    }
}
