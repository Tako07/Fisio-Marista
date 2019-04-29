<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diagnostico;

class DiagnosticoController extends Controller
{
    public function nuevoDiagnostico($paciente){
      $activo=diagnostico::select('activo')->where('id_paciente',$paciente)->get();
      foreach ($activo as $activo) {
        if($activo->activo!=0){
          $diagnosticos=diagnostico::select('id_diagnostico','diagnostico','pronostico','activo')->where('id_paciente',$paciente)->get();
          return view('diagnosticos',compact(['paciente','diagnosticos']));
        }
        return view('nuevo_padecimiento');


      }
    }
}
