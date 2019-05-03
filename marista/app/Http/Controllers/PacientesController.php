<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;
use DB;

class PacientesController extends Controller
{
  public function index(Request $request){

    if($request->paciente != ''){
        $pacientes=paciente::select('paciente.*')->where('curp', 'LIKE', $request->paciente.'%')->orWhereRaw('CONCAT(nombres," ",apaterno,amaterno) LIKE ?', '%'.$request->paciente.'%')->get();
    }
    else
        $pacientes=paciente::select('paciente.*')->get();
    $cont=1;
    return view('pacientes',compact(['pacientes','cont']));
  }

  public function modificaPaciente(Request $request, $x){

        $paciente = Paciente::find($request->input('inputIdPacienteAct'));
        $paciente->calle=$request->input('calleAct');
        $paciente->colonia=$request->input('coloniaAct');
        $paciente->codigo_postal=$request->input('cpAct');
        $paciente->num_cel=$request->input('celularAct');
        $paciente->religion=$request->input('religionAct');
        $paciente->familiar_a_cargo=$request->input('familiarAct');
        $paciente->num_tel=$request->input('telefonoAct');
        $paciente->save();
    
        $pacientes=Paciente::select('paciente.*')->get();
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
