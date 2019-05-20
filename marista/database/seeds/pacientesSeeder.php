<?php

use Illuminate\Database\Seeder;
use App\Models\paciente;

class pacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paciente= new paciente();
        $paciente->nombres='Pepe';
        $paciente->apaterno='Martinez';
        $paciente->amaterno='Lopez';
        $paciente->edad='45';
        $paciente->curp='MALP750337HMNKMR01';
        $paciente->sexo='M';
        $paciente->nacionalidad='Mexicano';
        $paciente->edo_civil='S';
        $paciente->ocupacion='arquitecto';
        $paciente->save();

        factory(paciente::class)->times(50)->create();

    }
}
