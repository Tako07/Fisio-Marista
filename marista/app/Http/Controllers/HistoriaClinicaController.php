<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\historia_clinica;
use App\Models\diagnostico;
use App\Models\alta;
use App\Models\mapa;

class HistoriaClinicaController extends Controller
{
  public function index(){
    $pacientes=paciente::select('id_paciente','nombres','apaterno','amaterno','curp')->get();
    $aux=1;
    return view('historiaClinica',compact(['pacientes','aux']));
  }
  public function showPaciente($paciente){
    $datos=historia_clinica::get()->where('id_paciente',$paciente)->first();
    $heredo_fam=json_decode($datos->ant_heredo_fam,true);
    $no_patologico=json_decode($datos->ant_pers_no_pat,true);
    $patologico=json_decode($datos->ant_pers_pat,true);
    $gineco_obs=json_decode($datos->ant_gineco_obs,true);
    return view('resumen_paciente',compact(['heredo_fam','no_patologico','patologico','gineco_obs','paciente']));
  }
  public function showDiagnostico($paciente){
    $diagnosticos=diagnostico::select('id_diagnostico','diagnostico','pronostico','activo')->where('id_paciente',$paciente)->get();
    return view('diagnosticos',compact(['paciente','diagnosticos']));
  }
  public function showDiagnosticoActual($paciente,$diagnostico){
    $diagnosticoActual=diagnostico::get()->where('id_paciente',$paciente)->where('id_diagnostico',$diagnostico)->first();
    $padecimiento_actual=json_decode($diagnosticoActual->padecimiento_actual,true);
    $sintomas=json_decode($diagnosticoActual->sintomas_generales,true);
    $aparatos=json_decode($diagnosticoActual->aparatos_sistemas);
    $exploracion=json_decode($diagnosticoActual->exploracion);
    $esqueletico=json_decode($diagnosticoActual->musculoesqueletico);
    $postura=json_decode($diagnosticoActual->postura);
    $alta=alta::get()->where('id_diagnostico',$diagnostico)->first();
    $mapa=mapa::select('musculos')->where(['id_paciente'=>$paciente,'id_diagnostico'=>$diagnostico])->get()->first();
    $musculos=$mapa->musculos;
    $musculos=substr($musculos,2);
    $musculos=substr($musculos,0,-2);
    $arreglo_musculos=explode('","',$musculos);


    return view('diagnostico_actual',compact(['padecimiento_actual','sintomas','aparatos','exploracion','esqueletico','postura','diagnosticoActual','paciente','alta','diagnostico','arreglo_musculos']));

  }
  public function alta($paciente,$diagnostico){
    if(session('rol')==2){
      $update= alta::where('id_diagnostico','=',$diagnostico)->first();
      $update->medico=session('id_usuario');
      $update->save();
      }
    else if(session('rol')==3){
      $update= alta::where('id_diagnostico','=',$diagnostico)->first();
      $update->fisioterapeuta=session('id_usuario');
      $update->save();
    }

    else if(session('rol')==4){
      $update= alta::where('id_diagnostico','=',$diagnostico)->first();
      $update->pasante=session('id_usuario');
      $update->save();
    }
    if($update->medico!=null && $update->fisioterapeuta!=null && $update->pasante!=null){
      $alta=diagnostico::where('id_diagnostico','=',$diagnostico)->update(['activo'=>'0']);

    }
    $diagnosticos=diagnostico::select('id_diagnostico','diagnostico','pronostico','activo')->where('id_paciente',$paciente)->get();
    return view('diagnosticos',compact(['paciente','diagnosticos']));
  }

  public function editar($paciente,$diagnostico){

  }
  public function guardaMapa(Request $request){
    $mapa= new mapa();
    $mapa->id_paciente=$request->paciente;
    $mapa->id_diagnostico=$request->diagnostico;
    $mapa->musculos=$request->datos;
    $mapa->save();
    $diagnostico=$request->diagnostico;
    $paciente=$request->paciente;
    $diagnosticos=diagnostico::select('id_diagnostico','diagnostico','pronostico','activo')->where('id_paciente',$request->paciente)->get();
    return view('diagnosticos',compact(['paciente','diagnosticos']));
  }
}
