@extends('layouts.appl')

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
    <!-- Login Form -->
          <form action="{{route('login')}}" method="post">
            {{ csrf_field() }}
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Usuario">
            <input id="password" type="password" class="fadeIn third" name="password" placeholder="Contraseña">
            <input type="submit" id="iniciarSesion" class="fadeIn fourth" value="Iniciar sesión">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
