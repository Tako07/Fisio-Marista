@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_historia.css') }}}" rel="stylesheet">
@endsection
@section('title','Diagnóstico actual')
@section('principal')
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Diagnostico actual de paciente
    </div>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Padecimiento actual
    </div>
  </div>

</div>

<div class="row justify-content-sm-center">
  <table id="table" class="table responsive-table">
    <thead>
      <tr class="yellowMarista">
        <th>Tiempo</th>
        <th>EVA</th>
      </tr>
    </thead>
    <tbody>
      @foreach($padecimiento_actual as $padecimiento => $eva)
      <tr class="grayMarista">
        <td>{{$padecimiento}}</td>
        <td><input type="text" name="" value="{{$eva}}"></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Síntomas generales
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
<table id="table" class="table responsive-table">
  <thead>
    <tr class="yellowMarista">
      <th>Síntoma</th>
      <th>Sí/No</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sintomas as $sintoma => $respuesta)
    <tr class="grayMarista">
      <td>{{$sintoma}}</td>
      <td><input type="text" name="" value="{{$respuesta}}"></td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Aparatos y Sistemas
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
<table id="table" class="table responsive-table">
  <thead>
    <tr class="yellowMarista">
      <th>Aparato</th>
      <th>Sí/No</th>
      <th>Cuál</th>
    </tr>
  </thead>
  <tbody>
    @foreach($aparatos as $aparato => $respuesta)
    <tr class="grayMarista">
      <td>{{$aparato}}</td>
      @foreach($respuesta as $dato)
      <td><input type="text" name="" value="">{{$dato}}</td>
      @endforeach
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Diagnósticos anteriores
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->diagnosticos_ant==null)
    <p class="text-justify grayMarista">Sin diagnosticos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->diagnosticos_ant}}</p>
    @endif
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Estudios de gabinete/Estudios de laboratorio
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->estudios==null)
    <p class="text-justify grayMarista">Sin estudios médicos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->estudios}}</p>
    @endif
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Tratamientos anteriores
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->tratamentos_ant==null)
    <p class="text-justify grayMarista">Sin tratamientos médicos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->tratamentos_ant}}</p>
    @endif
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Inquietud subyacente
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->inquietudes==null)
    <p class="text-justify grayMarista">Sin tratamientos médicos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->inquietudes}}</p>
    @endif
  </div>
</div>


@foreach($exploracion as $exploracion => $respuesta)
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      {{$exploracion}}
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
<table id="table" class="table responsive-table">
  <thead>
    <tr class="yellowMarista">
      <th>Variable</th>
      <th>Dato del pacietne</th>
    </tr>
  </thead>
  <tbody>
    @foreach($respuesta as $dato => $respuesta)
    <tr class="grayMarista">
      <td>{{$dato}}</td>
      <td>{{$respuesta}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endforeach

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Sistemas musculoesquelético por regiones
    </div>
  </div>
</div>
@if($esqueletico!=null)
@foreach($esqueletico as $esqueletico => $respuesta)
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      {{$esqueletico}}
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
  <table id="table" class="table responsive-table">
    <thead>
      <tr class="yellowMarista">
        <th>Región</th>
        <th>Dato del pacietne</th>
      </tr>
    </thead>
    <tbody>
      @foreach($respuesta as $dato => $respuesta)
      <tr class="grayMarista">
        <td>{{$dato}}</td>
        <td>{{$respuesta}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endforeach
@endif

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Postura
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
  <table id="table" class="table responsive-table">
    <thead>
      <tr class="yellowMarista">
        <th>Posicion</th>
        <th>Dato</th>
      </tr>
    </thead>
    <tbody>
      @if($postura!=null)
      @foreach($postura as $postura => $dato)
      <tr class="grayMarista">
        <td>{{$postura}}</td>
        <td>{{$dato}}</td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>

<!-- Modal Trigger -->
 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

 <!-- Modal Structure -->
 <div id="modal1" class="modal">
   <div class="modal-content">
     <h4>Dar de alta</h4>
    @if(session('rol')==1)
     <p>No puedes dar de alta al paciente</p>
    @elseif(session('rol')==2)
      @if($alta->medico==null)
      <a href="{{route('altaPaciente',['paciente'=>$paciente,'diagnostico'=>$diagnostico])}}" class="modal-close waves-effect waves-green btn-flat">Dar de alta al paciente</a>
      @else
      <p>Un medico ya dio de alta al pacientes</p>
      @endif
    @elseif(session('rol')==3)
      @if($alta->fisioterapeuta==null)
      <a href="{{route('altaPaciente',['paciente'=>$paciente,'diagnostico'=>$diagnostico])}}" class="modal-close waves-effect waves-green btn-flat">Dar de alta al paciente</a>
      @else
      <p>Un fisioterapeuta ya dio de alta al pacientes</p>
      @endif
    @elseif(session('rol')==4)
      @if($alta->pasante==null)
      <a href="{{route('altaPaciente',['paciente'=>$paciente,'diagnostico'=>$diagnostico])}}" class="modal-close waves-effect waves-green btn-flat">Dar de alta al paciente</a>
      @else
      <p>Un pasante ya dio de alta al pacientes</p>
      @endif
    @endif
   </div>

 </div>


@endsection
