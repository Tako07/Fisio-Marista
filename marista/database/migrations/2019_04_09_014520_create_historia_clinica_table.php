<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaClinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinica', function (Blueprint $table) {
            $table->increments('id_historia');
            $table->text('ant_heredo_fam');
            $table->text('ant_pers_no_pat');
            $table->text('ant_pers_pat');
            $table->text('ant_gineco_obs')->nullable();
            $table->integer('id_paciente')->unsigned();
            $table->timestamps();

            $table->foreign('id_paciente')->references('id_paciente')->on('paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historia_clinica');
    }
}
