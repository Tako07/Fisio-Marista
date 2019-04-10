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
            $table->string('username',80)->unique();
            $table->integer('rol',false)->unsigned();
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('email',100)->unique();
            $table->date('fecha_nacimiento');
            $table->string('calle',30)->nullable();
            $table->string('num_casa',20)->nullable();
            $table->string('colonia',50)->nullable();
            $table->string('cp',10)->nullable();
            $table->string('num_tel',10)->nullable();
            $table->string('num_cel',10)->nullable();
            $table->text('password');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('rol')->references('id')->on('roles');
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
