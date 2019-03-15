@extends('layouts.app')
@section('title','INICIO')
@section('stylesheet')
  <link rel="stylesheet" href="{{{ asset('css/bootstrap4.3.1/css/bootstrap.min.css') }}}">
  <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
  <script src=" {{{ asset('css/bootstrap4.3.1/js/jquery-3.3.1.slim.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/popper.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/bootstrap.min.js') }}}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('content')
<div class="bg">
  <div class="color-bg">

  <div class="container-fluid" style="background-color:rgba(0,55,100, 0.8);padding-top:1%;padding-bottom: 1%;">
    <div class="row">
      <div class="col-3">
        <h1 style="font-size: 1.5vw;color: #ffffff;font-family:Monaco,Georgia,Times,serif;padding-top:7%;">NombreDeUsuario</h1>
        <h2 style="font-size: 1.5vw;color: #ffffff;font-family:Monaco,Georgia,Times,serif;">Doctor Fernando Valenzuela</h2>
      </div>
      <div class="col-9">
        <img src="{{{ asset('img/logo/logo_horizontal_blanco.png') }}}" style="width:40%;" id="icon" alt="Icon" />
      </div>
    </div>
  </div>

  <div class="container" style="padding-left: 3%;padding-right: 3%; padding-top: 3%;">
    <div class="row">
      <div class="col-sm">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/datosPersonales.jpg') }}}" alt="Datos Personales" style="width:100%;">
      </div>
      <div class="col-sm">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/pacientes.jpg') }}}" alt="Pacientes" style="width:100%;">
      </div>
      <div class="col-sm">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/historiaClinica.jpg') }}}" alt="Historia Clinica" style="width:100%;">
      </div>
    </div>
    <div class="row" style="padding-top: 3%;">
      <div class="col-sm">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/consultas.jpg') }}}" alt="Consultas" style="width:100%;">
      </div>
      <div class="col-sm">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/citas.jpg') }}}" alt="Citas" style="width:100%;">
      </div>
      <div class="col-sm">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/cerrarSesion.jpg') }}}" alt="Cierra Sesion" style="width:100%;">
      </div>
    </div>
  </div>
</div>
</div>
@endsection