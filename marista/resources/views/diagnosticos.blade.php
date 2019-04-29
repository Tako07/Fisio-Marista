@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_historia.css') }}}" rel="stylesheet">
@endsection
@section('title','Diagnósticos')
@section('principal')

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Diagnosticos de paciente
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-10">


    <table id="table" class="table table-hover">
      <thead>
        <tr class="yellowMarista">
          <th class="col-1">Diagnosticos</th>
          <th class="col-4">Pronóstico</th>
          <th class="col-1">Activo</th>
        </tr>
      </thead>
      <tbody>
        @foreach($diagnosticos as $diagnostico)
        <tr class="grayMarista">
          <th class="col-1">{{$diagnostico->diagnostico}}</th>
          <th class='col-1'>{{$diagnostico->pronostico}}</th>
          @if($diagnostico->activo>0)
          <th class="col-1">
            <a href="{{route('showDiagnosticoActual',['paciente'=>$paciente,'diagnostico'=>$diagnostico->id_diagnostico])}}">Activo</a>
          </th>
          @else
          <th class="col-1">Inctivo</th>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{route('nuevoDiagnostico',['paciente'=>$paciente])}}">Nuevo diagnostico</a>

  </div>

</div>

@endsection
