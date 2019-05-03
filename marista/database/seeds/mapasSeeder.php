<?php

use Illuminate\Database\Seeder;
use App\Models\mapa;

class mapasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapa= new mapa();
        $mapa->id_paciente="1";
        $mapa->id_diagnostico="1";
        $mapa->musculos='["musculo13","musculo42"]';
        $mapa->save();
    }
}
