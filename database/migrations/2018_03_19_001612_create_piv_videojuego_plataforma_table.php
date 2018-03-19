<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivVideojuegoPlataformaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piv_videojuego_plataforma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idVideojuego')->unsigned();
            $table->integer('idPlataforma')->unsigned();
            $table->timestamps();

            $table->foreign('idVideojuego')->references('id')->on('videojuegos')->onDelete('cascade');
            $table->foreign('idPlataforma')->references('id')->on('cat_plataforma')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piv_videojuego_plataforma');
    }
}
