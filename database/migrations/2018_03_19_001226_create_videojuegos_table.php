<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideojuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 50);
            $table->string('descripcion', 250);
            $table->string('portada', 100);
            $table->integer('idGenero')->unsigned();
            $table->integer('idDesarrolladora')->unsigned();
            $table->integer('idPlataforma')->unsigned();
            
            $table->timestamps();
            $table->foreign('idGenero')->references('id')->on('cat_genero')->onDelete('cascade');
            $table->foreign('idDesarrolladora')->references('id')->on('cat_plataforma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videojuegos');
    }
}
