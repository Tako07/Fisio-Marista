<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombres');
            $table->int('rol');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('email')->unique();
            $table->date('fecha_nacimiento');
            $table->string('calle',30)->nullable();
            $table->string('num_casa',20)->nullable();
            $table->string('colonia',50)->nullable();
            $table->string('cp',10)->nullable();
            $table->string('num_tel',10)->nullable();
            $table->string('num_cel',10)->nullable();
            $table->string('password');
            $table->boolean('status');
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
        Schema::dropIfExists('usuario');
    }
}
