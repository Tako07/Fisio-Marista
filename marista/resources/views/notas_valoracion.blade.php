@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_historia.css') }}}" rel="stylesheet">
@endsection
@section('title,Calendario')
@section('principal')

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Notas de valoración
    </div>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-10">


    <table id="table" class="table table-hover">
      <thead>
        <tr class="yellowMarista">
          <th class="col-1">Fecha</th>
          <th class="col-4">Eva</th>
          <th class="col-1">ver</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notas as $nota)
        <tr class="grayMarista">
          <th class="col-1">{{$nota->created_at}}</th>
          <th class='col-1'>{{$nota->eva}}</th>
          <th class="col-1"><a href="{{route('ver_nota',['id_nota'=>$nota->id])}}">Ver</a></th>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{route('nuevaNota',['paciente'=>$paciente])}}">Nueva nota</a>

  </div>

</div>

@endsection
