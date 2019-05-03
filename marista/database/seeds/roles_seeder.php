<?php

use Illuminate\Database\Seeder;
use App\Models\roles;


class roles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $rol= new roles();
        $rol->descripcion='administrador';
        $rol->save();
        //2
        $rol = new roles();
        $rol->descripcion='medico';
        $rol->save();
        //3
        $rol = new roles();
        $rol->descripcion='fisioterapeuta';
        $rol->save();
        //4
        $rol = new roles();
        $rol->descripcion='pasante';
        $rol->save();
        //5
        $rol = new roles();
        $rol->descripcion='practicante';
        $rol->save();
        //6
        $rol = new roles();
        $rol->descripcion='servidor social';
        $rol->save();
    }
}
