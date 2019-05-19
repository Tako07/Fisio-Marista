<?php

namespace App\Exports;

use App\Models\paciente;
use App\Models\historia_clinica;
use Maatwebsite\Excel\Concerns\FromArray;

class PacientesExport implements FromArray
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function array():array
    {
      $pacientes=paciente::join('historia_clinica as h', 'paciente.id_paciente','=','h.id_paciente')->get();
      //dd($pacientes);
      $arreglo=array();
      foreach ($pacientes as $paciente ) {
        array_push($arreglo,json_decode($paciente->ant_heredo_fam,true));
        array_push($arreglo,json_decode($paciente->ant_pers_no_pat,true));
        array_push($arreglo,json_decode($paciente->ant_pers_pat,true));
      }
        return $arreglo;
    }
}
