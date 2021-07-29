<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('part_shopping_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shopping_list_id');
            $table->unsignedBigInteger('part_id');
            $table->timestamps();

            $table->foreign('shopping_list_id')->references('id')->on('lists');
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
        Schema::dropIfExists('list');
    }
}
