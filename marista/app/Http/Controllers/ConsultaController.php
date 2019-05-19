<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PacientesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\paciente;
use App\Models\usuario;

class ConsultaController extends Controller
{
    public function index(){
      $cantidad=paciente::count();
      $usuarios=usuario::count();
      return view('consulta',compact(['cantidad','usuarios']));
    }
    public function descarga(){
      return Excel::download(new PacientesExport,'pacientes.xlsx');
    }
}
