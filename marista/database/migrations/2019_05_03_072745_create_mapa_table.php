<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_paciente')->unsigned();
            $table->integer('id_diagnostico')->unsigned();
            $table->text('musculos');
            $table->timestamps();

            $table->foreign('id_paciente')->references('id_paciente')->on('paciente');
            $table->foreign('id_diagnostico')->references('id_diagnostico')->on('diagnostico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapa');
    }
}
