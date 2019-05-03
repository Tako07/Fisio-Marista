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
          <th class="col-1">Eva</th>
          <th class="col-2">Pruebas funcionales</th>
          <th class="col-2">Actividad funcional</th>
          <th class="col-2">Fuerza</th>
          <th class="col-2">ROM</th>
        </tr>
      </thead>
      <tbody>
        <tr class="grayMarista">
          <th class="col-1">{{$nota->created_at}}</th>
          <th class='col-1'>{{$nota->eva}}</th>
          <th class="col-2">{{$nota->pruebas_funcionales}}</th>
          <th class="col-2">{{$nota->actividad_funcional}}</th>
          <th class="col-2">{{$nota->fuerza}}</th>
          <th class="col-2">{{$nota->rom}}</th>
        </tr>
      </tbody>
    </table>

  </div>

</div>

@endsection
