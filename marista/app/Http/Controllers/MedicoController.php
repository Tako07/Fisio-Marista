<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class MedicoController extends Controller
{
  public function showRegistro(){
    return view('registroMedico');
  }
  public function registro(Request $request){
    $usuario= new usuario();
    $usuario->nombres=$request->nombre;
    $usuario->username=$request->username;
    $usuario->apaterno=$request->apaterno;
    $usuario->amaterno=$request->amaterno;
    $usuario->fecha_nacimiento=$request->fecha_nacimiento;
    $usuario->num_tel=$request->telefono;
    $usuario->num_cel=$request->celular;
    $usuario->email=$request->email;
    $usuario->calle=$request->calle;
    $usuario->num_casa=$request->numero;
    $usuario->colonia=$request->colonia;
    $usuario->cp=$request->cp;
    $usuario->rol=$request->rol;
    $usuario->password=bcrypt($request->password);
    $usuario->status='1';
    $usuario->save();

    $usuarios=usuario::select('nombres','apaterno','amaterno','rol','calle','colonia','fecha_nacimiento')->get();
    $cont=1;
    return view('usuarios',compact(['usuarios','cont']));
  }
}
