<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\usuario;

class ConsultaController extends Controller
{
    public function index(){
      $cantidad=paciente::count();
      $usuarios=usuario::count();
      return view('consulta',compact(['cantidad','usuarios']));
    }
}
