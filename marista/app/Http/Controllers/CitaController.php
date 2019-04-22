<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
  public function index(){
    $citas=cita::select('id','descripcion','curp_paciente','fecha_hora_cita','asistencia','status','agendada_por','color')->get();
    return view('cita',compact(['citas']));
  }
  public function registrarCita(Request $request){

    $cita = new cita();
    $cita->descripcion = $request->inputDescripcion;
    $cita->curp_paciente = $request->inputCurpPaciente;
    $cita->fecha_hora_cita = $request->inputFechaHoraCita;
    $cita->asistencia = 'N';
    $cita->status = 'EN TERAPIA';
    $cita->agendada_por = $request->inputUsuario;
    $cita->color = $request->inputColor;
    $cita->save();

    $citas=cita::select('id','descripcion','curp_paciente','fecha_hora_cita','asistencia','status','agendada_por','color')->get();
    
    return view('cita',compact(['citas']));
  }
}
