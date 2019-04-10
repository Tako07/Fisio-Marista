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
        $rol= new roles();
        $rol->descripcion='administrador';
        $rol->save();

        $rol = new roles();
        $rol->descripcion='medico';
        $rol->save();

        $rol = new roles();
        $rol->descripcion='fisioterapeuta';
        $rol->save();

        $rol = new roles();
        $rol->descripcion='pasante';
        $rol->save();

        $rol = new roles();
        $rol->descripcion='practicante';
        $rol->save();
    }
}
