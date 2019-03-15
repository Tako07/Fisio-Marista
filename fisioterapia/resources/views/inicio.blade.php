@extends('layouts.navbar')
@section('title','INICIO')
@section('more_style')
  <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
  <script src=" {{{ asset('css/bootstrap4.3.1/js/jquery-3.3.1.slim.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/popper.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/bootstrap.min.js') }}}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('principal')
<div class="bg">
  <div class="color-bg">

  <div class="container-fluid" style="padding-left: 2%;padding-right: 2%; padding-top: 1%;">
    <div class="row">
      <div class="col-md contImg">
        <div class="transparencia">
          <div class="textoImg">Datos personales</div>
        </div>
      </div>
      <div class="col-md">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/pacientes.jpg') }}}" alt="Pacientes" style="width:100%;">
      </div>
      <div class="col-md">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/historiaClinica.jpg') }}}" alt="Historia Clinica" style="width:100%;">
      </div>
    </div>
    <div class="row" style="padding-top: 3%;">
      <div class="col-md">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/consultas.jpg') }}}" alt="Consultas" style="width:100%;">
      </div>
      <div class="col-md">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/citas.jpg') }}}" alt="Citas" style="width:100%;">
      </div>
      <div class="col-md">
        <img class="rounded-sm img-fluid img-thumbnail" src="{{{ asset('img/inicio/cerrarSesion.jpg') }}}" alt="Cierra Sesion" style="width:100%;">
      </div>
    </div>
  </div>
</div>
</div>
@endsection
