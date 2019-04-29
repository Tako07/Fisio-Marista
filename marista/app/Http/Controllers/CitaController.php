<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Models\paciente;
use Log;
use Illuminate\Http\Request;
use Auth;

class CitaController extends Controller
{
  public function index(){
    $citas=cita::select('id','descripcion','curp_paciente','fecha_cita','hora_cita','asistencia','status','agendada_por','color','estado')->where('estado', '=', 'ACTIVA')->get();
    $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
    return view('cita',compact(['citas']),compact(['pacientes']));
  }
  public function registrarCita(Request $request){

    if($request->ajax()) {
        $cita = new cita();
        $cita->descripcion = $request->input('inputDescripcion');
        $cita->curp_paciente = $request->input('inputCurpPaciente');
        $cita->fecha_cita = $request->input('inputFechaCita');
        $cita->hora_cita = $request->input('inputHoraCita');
        $cita->asistencia = 'N';
        $cita->status = 'EN TERAPIA';
        $cita->agendada_por = $request->input('inputIdUsuario');
        $cita->color = $request->input('inputColor');
        $cita->estado = 'ACTIVA';
        $cita->save();

        $citas=cita::select('id','descripcion','curp_paciente','fecha_cita','hora_cita','asistencia','status','agendada_por','color','estado')->where('estado', '=', 'ACTIVA')->get();
        $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
    
        return view('cita',compact(['citas']),compact(['pacientes']));
    }

  }

  public function bajaCita(Request $request, $id){

    $cita = Cita::find($request->input('inputIdCita'));
    $cita->estado = "BAJA";
    $cita->save();

    $citas=cita::select('id','descripcion','curp_paciente','fecha_cita','hora_cita','asistencia','status','agendada_por','color','estado')->where('estado', '=', 'ACTIVA')->get();
    $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
    return view('cita',compact(['citas']),compact(['pacientes']));

  }
}
