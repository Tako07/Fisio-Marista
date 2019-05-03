<?php

use Illuminate\Database\Seeder;
use App\Models\notas_valoracion;

class notasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nota= new notas_valoracion();
        $nota->id_paciente="1";
        $nota->id_diagnostico="1";
        $nota->eva="4";
        $nota->pruebas_funcionales="Ejercicio con pelota";
        $nota->actividad_funcional="Correr";
        $nota->fuerza="Regular";
        $nota->rom="rom";
        $nota->save();
    }
}
