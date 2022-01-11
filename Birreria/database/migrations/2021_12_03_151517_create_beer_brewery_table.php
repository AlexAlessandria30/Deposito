<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeerBreweryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beer_brewery', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('beer_id');
            $table->foreign('beer_id')->references('id')->on('beers');

            $table->unsignedBigInteger('brewery_id');
            $table->foreign('brewery_id')->references('id')->on('breweries');

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
        Schema::dropIfExists('beer_brewery');
    }
}
