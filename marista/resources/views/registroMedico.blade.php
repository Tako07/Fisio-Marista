@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_registro.css') }}}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('title','Registro de usuarios')
@section('principal')

  <h1 class="row justify-content-md-center yellowMarista font-size:10vw">  Registro de usuarios</h1>
<div  class="row justify-content-md-center">
  <div class="container">
    <form action="{{route('insertarMedico')}}" method="post">
      {{ csrf_field() }}
          Nombre <input class="input" name="nombre" type="text" placeholder="&#128100; " required autofocus>
          Nombre de usuario <input class="input" name="username" type="text" placeholder="&#128100; " required autofocus>
          Apellido paterno <input class="input"  name="apaterno" type="text" placeholder="&#128100; " required autofocus>
          Apellido materno <input class="input"  name="amaterno"type="text" placeholder="&#128100; " required autofocus>
          Fecha nacimiento <input type="date" name="fecha_nacimiento" step="1">

          Telefono de casa <input class="input" type="text" name="telefono" placeholder="&#9743; " required>
          Telefono celular <input class="input" type="text" name="celular" placeholder="&#128241; " required>
          Email <input class="input" type="email" name="email" placeholder="&#64; " required>
          Dirección <input class="input" type="text" name="calle" placeholder="&#127968; Calle" required>
                    <input class="input" type="text" name="numero" placeholder="&#35; Numero" required>
                    <input class="input" type="text" name="colonia" placeholder="&#127968; Colonia" required>
                    <input class="input" type="text" name="cp" placeholder="&#127968; Codigo postal" required>
          Rol <select name="rol" placeholder="&#127968; ">
                <option value="1">Administrador</option>
                <option value="2">Médico</option>
                <option value="3">Fisioterapeuta</option>
                <option value="4">Pasante</option>
                <option value="5">Practicante</option>
              </select>
          Contraseña <input class="input" type="password" name="password" placeholder="&#127968; " required>
          <div  class="row justify-content-md-center">
            <div  class="btn-group fadeIn first" role="group" aria-label="Basic example">
              <button type="submit" name="tipo" class="btn btn-primary">REGISTRAR</button>
              <button type="button" name="tipo" class="btn btn-primary">LIMPIAR</button>
            </div>
          </div>
        </form>

    </div>
</div>
@endsection
