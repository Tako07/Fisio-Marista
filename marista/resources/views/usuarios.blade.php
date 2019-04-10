@extends('layouts.navBar')
@section('title','Pacientes')
@section('more_style')
  <link rel="stylesheet" href="{{{ asset('css/bootstrap4.3.1/css/bootstrap.min.css') }}}">
  <script src=" {{{ asset('css/bootstrap4.3.1/js/jquery-3.3.1.slim.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/popper.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/bootstrap.min.js') }}}"></script>
  <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
@endsection
@section('principal')
<div class="container border contenido" style="border-radius: 2vw;width: 30%;padding-top: 0.5%;padding-bottom: 0.5%;background-color: #ffc533;text-align: center;">
      <h1 style="font-size: 2vw;">LISTADO DE USUARIOS</h1>
</div>

<div id="search" class="container" style="padding-top: 2%;">
  <div class="row justify-content-md-center">
    <div class="col-lg-4">
      <input type="text" class="search-query form-control" placeholder="Buscar Pacientes" />
    </div>
    <div class="col-md-auto">
      <button id="buttonSearch" class="col-md-auto btn" type="button">
        <i class="large material-icons">search</i>
      </button>
    </div>
    <div class="col-md-auto">
      <a href="{{route('registroMedico')}}"id="btnNuevoUsuario" class="col-md-auto btn btn-lg" type="button" style="color: #fff;line-height: 50%;">Nuevo Usuario</a>
    </div>
  </div>
</div>

<div class="table-responsive-md">
  <table class="table table-hover">
  <thead>
    <tr class="yellowMarista">
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Rol</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usuario)
      @if($cont==1)
      <tr class="grayMarista">
        <th scope="row">{{$usuario->nombres}}</th>
        <td>{{$usuario->apaterno}} {{$usuario->amaterno}}</td>
        <td>Calle: {{$usuario->calle}} Colonia: {{$usuario->colonia}}</td>
        <td>{{$usuario->rol}}</td>
        <td>{{$usuario->fecha_nacimiento}}</td>
        <td><a href="historiaClinica/clinica">Ver historial</a></td>
      </tr>
        @php
          $cont=2
        @endphp
      @elseif($cont==2)
      <tr>
        <th scope="row">{{$usuario->nombres}}</th>
        <td>{{$usuario->apaterno}} {{$usuario->amaterno}}</td>
        <td>Calle: {{$usuario->calle}} Colonia: {{$usuario->colonia}}</td>
        <td>{{$usuario->rol}}</td>
        <td>{{$usuario->fecha_nacimiento}}</td>
        <td><a href="historiaClinica/clinica">Ver historial</a></td>
      </tr>
        @php
          $cont=1
        @endphp
      @endif
    @endforeach
  </div>











@endsection
@section('more_script')

@endsection
