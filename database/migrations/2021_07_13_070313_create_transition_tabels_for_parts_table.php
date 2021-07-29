<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitionTabelsForPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_part', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('part_id');
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('part_id')->references('id')->on('parts');
        });

        Schema::create('car_part', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('part_id');
            $table->timestamps();
            
            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('part_id')->references('id')->on('parts');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transition_tabels_for_parts');
    }
}
