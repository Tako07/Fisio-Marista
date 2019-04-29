<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_diagnostico')->unsigned();
            $table->integer('medico')->unsigned()->nullable();
            $table->integer('fisioterapeuta')->unsigned()->nullable();
            $table->integer('pasante')->unsigned()->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('altas');
    }
}
