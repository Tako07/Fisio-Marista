<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico', function (Blueprint $table) {
            $table->increments('id_diagnostico');
            $table->integer('id_paciente')->unsigned();
            $table->text('padecimiento_actual');
            $table->text('sintomas_generales')->nullable();
            $table->text('aparatos_sistemas')->nullable();
            $table->string('diagnosticos_ant')->nullable();
            $table->string('estudios')->nullable();
            $table->string('tratamentos_ant')->nullable();
            $table->string('inquietudes')->nullable();
            $table->text('exploracion')->nullable();
            $table->text('musculoesqueletico')->nullable();
            $table->text('postura')->nullable();
            $table->string('dermatomas')->nullable();
            $table->string('diagnostico');
            $table->string('pronostico');
            $table->string('objetivos')->nullable();
            $table->text('plan')->nullable();
            $table->boolean('activo');

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
        Schema::dropIfExists('diagnostico');
    }
}
