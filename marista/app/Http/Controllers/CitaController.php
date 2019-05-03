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
    $citas=cita::select('citas.id','citas.descripcion','citas.curp_paciente','citas.fecha_cita','citas.hora_cita','citas.asistencia','citas.status','citas.agendada_por','citas.color','citas.estado','paciente.nombres','paciente.apaterno','paciente.amaterno')->join('paciente','curp','=','citas.curp_paciente')->get();
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

        $citas=cita::select('citas.id','citas.descripcion','citas.curp_paciente','citas.fecha_cita','citas.hora_cita','citas.asistencia','citas.status','citas.agendada_por','citas.color','citas.estado','paciente.nombres','paciente.apaterno','paciente.amaterno')->join('paciente','curp','=','citas.curp_paciente')->get();
    $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
    
        return view('cita',compact(['citas']),compact(['pacientes']));
    }

  }

  public function bajaCita(Request $request, $id){

    $cita = Cita::find($request->input('inputIdCita'));
    $cita->estado = "BAJA";
    $cita->save();

    $citas=cita::select('citas.id','citas.descripcion','citas.curp_paciente','citas.fecha_cita','citas.hora_cita','citas.asistencia','citas.status','citas.agendada_por','citas.color','citas.estado','paciente.nombres','paciente.apaterno','paciente.amaterno')->join('paciente','curp','=','citas.curp_paciente')->get();
    $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
    return view('cita',compact(['citas']),compact(['pacientes']));
  }

  public function modificaCita(Request $request, $id, $MoB){

    if ($MoB == 'B') {
        $cita = Cita::find($request->input('inputIdCitaAct'));
        $cita->estado = "BAJA";
        $cita->save();

        $citas=cita::select('citas.id','citas.descripcion','citas.curp_paciente','citas.fecha_cita','citas.hora_cita','citas.asistencia','citas.status','citas.agendada_por','citas.color','citas.estado','paciente.nombres','paciente.apaterno','paciente.amaterno')->join('paciente','curp','=','citas.curp_paciente')->get();
    $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
        return view('cita',compact(['citas']),compact(['pacientes']));
    }
    else{
        $cita = Cita::find($request->input('inputIdCitaAct'));
        $cita->descripcion = $request->input('inputDescripcionAct');
        $cita->curp_paciente = $request->input('inputCurpPacienteAct');
        $cita->fecha_cita = $request->input('inputFechaCitaAct');
        $cita->hora_cita = $request->input('inputHoraCitaAct');
        $cita->color = $request->input('inputColorAct');
        $cita->agendada_por = $request->input('inputIdUsuario');
        $cita->save();
    
        $citas=cita::select('citas.id','citas.descripcion','citas.curp_paciente','citas.fecha_cita','citas.hora_cita','citas.asistencia','citas.status','citas.agendada_por','citas.color','citas.estado','paciente.nombres','paciente.apaterno','paciente.amaterno')->join('paciente','curp','=','citas.curp_paciente')->get();
        $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
        return view('cita',compact(['citas']),compact(['pacientes']));}
    }
}
