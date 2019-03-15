@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_registro.css') }}}" rel="stylesheet">
@endsection
@section('title','Registro de médicos')
@section('principal')

<body>

  <h1 class="row justify-content-md-center yellowMarista">  Registro de médicos</h1>
<div  class="row justify-content-md-center">
  <div class="container">
          Nombre <input class="input" type="text" placeholder="&#128100; " required autofocus>
          Apellido paterno <input class="input" type="text" placeholder="&#128100; " required autofocus>
          Apellido materno <input class="input" type="text" placeholder="&#128100; " required autofocus>
          Fecha nacimiento <input type="date" name="cumpleanios" step="1">

          Telefono de casa <input class="input" type="text" placeholder="&#9743; " required>
          Telefono celular <input class="input" type="text" placeholder="&#128241; " required>
          Email <input class="input" type="email" placeholder="&#64; " required>
          Dirección <input class="input" type="text" placeholder="&#127968; Calle" required>
                    <input class="input" type="text" placeholder="&#35; Numero" required>
                    <input class="input" type="text" placeholder="&#127968; Colonia" required>
                    <input class="input" type="text" placeholder="&#127968; Codigo postal" required>
          Profesión <input class="input" type="text" placeholder="&#127968; " required>
          Registro profesional <input class="input" type="text" placeholder="&#127968; " required>
          Institución otorgadora de registro profesional <input class="input" type="text" placeholder="&#127968; " required>
          Especialidad <input class="input" type="text" placeholder="&#127968; " required>
          Fecha de ingreso <input class="input" type="date" placeholder="&#128197; " required>

      <div  class="row justify-content-md-center">
        <div  class="btn-group fadeIn first" role="group" aria-label="Basic example">
          <button type="button" name="tipo" class="btn btn-primary">REGISTRAR</button>
          <button type="button" name="tipo" class="btn btn-primary">LIMPIAR</button>
        </div>
      </div>
    </div>
</div>
</body>
