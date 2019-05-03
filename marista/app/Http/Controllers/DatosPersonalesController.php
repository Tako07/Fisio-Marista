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
      $usuarios=usuario::select('usuario.nombres','usuario.apaterno','usuario.amaterno','usuario.rol','usuario.calle','usuario.colonia','usuario.fecha_nacimiento','roles.descripcion')->join('roles','id','=','usuario.rol')->get();
      $cont=1;
      return view('usuarios',compact(['usuarios','cont']));
    }
    public function registrarUsuario(){
      return true;
    }
}
