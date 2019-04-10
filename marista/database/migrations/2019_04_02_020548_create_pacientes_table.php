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
            $table->string('apaterno');
            $table->string('amaterno');
            $table->integer('edad');
            $table->string('curp',18)->unique();
            $table->enum('sexo',['M','F'])->nullable();
            $table->string('nacionalidad');
            $table->enum('edo_civil',['S','C'])->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('calle',30)->nullable();
            $table->string('colonia',50)->nullable();
            $table->string('codigo_postal',10)->nullable();
            $table->string('ciudad',30)->nullable();
            $table->string('estado',30)->nullable();
            $table->string('num_tel',10)->nullable();
            $table->string('num_cel',10)->nullable();
            $table->string('religion')->nullable();
            $table->string('familiar_a_cargo')->nullable();
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
