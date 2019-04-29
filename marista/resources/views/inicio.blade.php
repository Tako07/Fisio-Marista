@extends('layouts.navbar')
@section('title','Inicio')
@section('more_style')
  <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
@endsection
@section('principal')
<div class="bg">
  <div class="color-bg">

  <div class="" style="padding-left: 2%;padding-right: 2%; padding-top: 1%;">
    <div class="row">
      <div id="datosPersonales" class="col-md contImg">
        @if(session('rol')==1)
        <a href="{{route('showDatosPersonalesAdmin')}}">
        @else
        <a href="{{route('showDatosPersonales')}}">
        @endif
          <div class="transparencia">
            <div class="textoImg">Datos personales</div>
          </div>
        </a>
      </div>
      <!--<div class="col-md">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/pacientes.jpg') }}}" alt="Pacientes" style="width:100%;">
      </div>-->
      <div id="pacientes" class="col-md contImg">
        <a href="{{route('showPacientes')}}">
          <div class="transparencia">
            <div class="textoImg">Pacientes</div>
          </div>
        </a>
      </div>
      <div id="historia_clinica" class="col-md contImg">
        <a href="{{route('showHistoriaClinica')}}">
          <div class="transparencia">
            <div class="textoImg">Historia Clinica</div>
          </div>
        </a>
      </div>
    </div>
    <div class="row" style="padding-top: 3%;">
      <div id="consultas" class="col-md contImg">
        <a href="{{route('showConsuta')}}">
          <div class="transparencia">
            <div class="textoImg">Consultas</div>
          </div>
        </a>
      </div>
      <!--<div class="col-md">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/pacientes.jpg') }}}" alt="Pacientes" style="width:100%;">
      </div>-->
      <div id="citas" class="col-md contImg">
        <a href="{{route('showCalendario')}}">
          <div class="transparencia">
            <div class="textoImg">Citas</div>
          </div>
        </a>
      </div>
      <div id="cerrar_sesion" class="col-md contImg">
        <a href="{{route('logout')}}">
        <div class="transparencia">
          <div class="textoImg">Cerrar Sesión</div>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
