@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_historia.css') }}}" rel="stylesheet">
@endsection
@section('title','Historia Clinica')
@section('principal')

<div id="search">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
      <input type="text" class="search-query form-control" placeholder="Buscar Pacientes" />
    </div>
    <div class="col-sm-1">
      <button id="buttonSearch" class=" col-md-auto btn" type="button">
        <i class="large material-icons">search</i>
      </button>
    </div>

  </div>
</div>



<table id="table" class="table table-hover">
  <thead>
    <tr class="yellowMarista">
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Curp</th>
      <th class="cita" scope="col">Fecha de cita</th>
      <th scope="col">Historial</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pacientes as $paciente)
    @if($aux==1)
    <tr class="grayMarista">
      <th scope="row">{{$paciente->nombres}}</th>
      <td>{{$paciente->apaterno}} {{$paciente->amaterno}}</td>
      <td>{{$paciente->curp}}</td>
      <th class="cita" scope="col">12/01/2020</th>
      <td><a href="{{route('showHistoriaPaciente',['paciente'=>$paciente->id_paciente])}}">Ver historial</a></td>
    </tr>
      @php
      $aux=2
      @endphp
    @else
    <tr class="">
      <th scope="row">{{$paciente->nombres}}</th>
      <td>{{$paciente->apaterno}} {{$paciente->amaterno}}</td>
      <td>{{$paciente->curp}}</td>
      <th class="cita" scope="col">12/01/2020</th>
      <td><a href="{{route('showHistoriaPaciente',['paciente'=>$paciente->id_paciente])}}">Ver historial</a></td>
    </tr>
      @php
        $aux=1
      @endphp
    @endif
    @endforeach
  </tbody>
</table>

@endsection
