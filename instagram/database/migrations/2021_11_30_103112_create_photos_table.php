<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {         
            $table->bigIncrements('id'); // Primary Key
            
            // NO QUI LA FK
            // MA HO BISOGNO DELLA TABELLA PIVOT !!!
            // $table->foreignId('tag_id'); // Forgin Key (chiave esterna)
            
            $table->string('title');
            $table->string('url'); // url della foto
            $table->text('description');

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
        Schema::dropIfExists('photos');
    }
}
