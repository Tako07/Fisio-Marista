@extends('layouts.app')

@section('title','login')
@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection
@section('content')
<div class="background">
  <div class="color-bg">
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->

    <div class="fadeIn first">
      <img src="{{{ asset('img/logo/logo_horizontal_azul.png') }}}" id="icon" alt="User Icon" />
    </div>
    <div class="fadeIn first">
      <div class="fondo">
        <h1 id="titulo">Sistema fisioterapia</h1>
      </div>
    </div>
    <!-- Login Form -->
    <form>
      <div  class="btn-group fadeIn first" role="group" aria-label="Basic example">
        <button type="button" name="tipo" class="btn btn-primary">Administrador</button>
        <button type="button" name="tipo" class="btn btn-primary">Médico</button>
        <button type="button" name="tipo" class="btn btn-primary">Pasante</button>
        <button type="button" name="tipo" class="btn btn-primary">Servicio Social</button>
      </div>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Iniciar sesión">
    </form>

  </div>
</div>
  </div>
</div>
@endsection
