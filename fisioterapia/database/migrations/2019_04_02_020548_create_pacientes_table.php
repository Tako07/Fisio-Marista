<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('id_paciente');
            $table->string('nombres');
            $table->string('ap_Pat');
            $table->string('ap_Mat');
            $table->integer('edad');
            $table->char('sexo', 1);
            $table->date('fecha_nacimiento', 1);
            $table->string('nacionalidad')->nullable();
            $table->string('edo_Civil');
            $table->string('ocupacion');
            $table->string('calle_Numero');
            $table->string('colonia');
            $table->string('cp',7);
            $table->string('num_cel');
            $table->string('religion')->nullable();
            $table->string('nombre_Familiar');
            $table->string('celular_Familiar');
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
        Schema::dropIfExists('paciente');
    }
}
