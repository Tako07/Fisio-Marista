@extends('layouts.navbar')
@section('title','Inicio')
@section('more_style')
  <link rel="stylesheet" href="{{{ asset('css/bootstrap4.3.1/css/bootstrap.min.css') }}}">
  <script src=" {{{ asset('css/bootstrap4.3.1/js/jquery-3.3.1.slim.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/popper.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/bootstrap.min.js') }}}"></script>
  <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
@endsection
@section('principal')
<div class="bg">
  <div class="color-bg">

  <div class="" style="padding-left: 2%;padding-right: 2%; padding-top: 1%;">
    <div class="form-row">
      <div id="datosPersonales" class="form-group col-md-4">
        @if(session('rol')==1)
          <a href="{{route('showDatosPersonalesAdmin')}}">
        @else
          <a href="{{route('showDatosPersonales')}}">
        @endif
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/datosPersonales.jpg') }}}" alt="Datos Personales" style="width:100%;">
        </a>
      </div>

      <div id="pacientes" class="form-group col-md-4">
        <a href="{{route('showPacientes')}}">
          <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/pacientes.jpg') }}}" alt="Datos Personales" style="width:100%;">
        </a>
      </div>
      <div id="historia_clinica" class="form-group col-md-4">
        <a href="{{route('showHistoriaClinica')}}">
          <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/historiaClinica.jpg') }}}" alt="Datos Personales" style="width:100%;">
        </a>
      </div>
    </div>
    <div class="form-row" style="padding-top: 3%;">
      <div id="consultas" class="form-group col-md-4">
        <a href="{{route('showConsuta')}}">
          <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/consultas2.jpg') }}}" alt="Datos Personales" style="width:100%;">
        </a>
      </div>
      <div id="citas" class="form-group col-md-4">
        <a href="{{route('showCalendario')}}">
          <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/citas2.jpg') }}}" alt="Datos Personales" style="width:100%;">
        </a>
      </div>
      <div id="cerrar_sesion" class="form-group col-md-4">
        <a href="{{route('logout')}}">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/cerrarSesion.jpg') }}}" alt="Datos Personales" style="width:100%;">
        </a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
