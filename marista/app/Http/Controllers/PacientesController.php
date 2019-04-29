<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
  public function index(){
    $pacientes=paciente::select('nombres','apaterno','amaterno','calle','colonia','curp','edad')->get();
    $cont=1;
    return view('pacientes',compact(['pacientes','cont']));
  }
  public function registrarPaciente(Request $request){

    $paciente= new paciente();
    $paciente->nombres=$request->nombre;
    $paciente->apaterno=$request->apaterno;
    $paciente->amaterno=$request->amaterno;
    $paciente->edad=$request->edad;
    $paciente->curp=$request->curp;
    $paciente->sexo=$request->radioSexo;
    $paciente->nacionalidad=$request->nacionalidad;
    $paciente->edo_civil=$request->radioEdo;
    $paciente->ocupacion=$request->ocupacion;
    $paciente->calle=$request->calle;
    $paciente->colonia=$request->colonia;
    $paciente->codigo_postal=$request->cp;
    $paciente->num_cel=$request->celular;
    $paciente->religion=$request->religion;
    $paciente->familiar_a_cargo=$request->familiar;
    $paciente->num_tel=$request->telefono;
    $paciente->save();

    $pacientes=paciente::select('nombres','apaterno','amaterno','calle','colonia','ocupacion','edad')->get();
    $cont=1;
    return view('pacientes',compact(['pacientes','cont']));
  }
}
