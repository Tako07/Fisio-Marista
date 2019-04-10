<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;

class HistoriaClinicaController extends Controller
{
  public function index(){
    $pacientes=paciente::select('nombres','apaterno','amaterno','curp')->get();
    $aux=1;
    return view('historiaClinica',compact(['pacientes','aux']));
  }
}
