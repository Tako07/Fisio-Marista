<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class DatosPersonalesController extends Controller
{
    public function index(){
      $usr=usuario::where('id_usuario',session('id_usuario'))->get()->first();
      return view('DatosPersonales',compact(['usr']));
    }
    public function admin(){
      $usuarios=usuario::select('nombres','apaterno','amaterno','rol','calle','colonia','fecha_nacimiento')->get();
      $cont=1;
      return view('usuarios',compact(['usuarios','cont']));
    }
    public function registrarUsuario(){
      return true;
    }
}
