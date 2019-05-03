@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_historia.css') }}}" rel="stylesheet">
@endsection
@section('title,Calendario')
@section('principal')
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Antecedentes heredo familiares
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-10">


    <table id="table" class="table table-hover">
      <thead>
        <tr class="yellowMarista">
          <th class="col-1">Antecedentes</th>
          <th class="col-1">Sí/No</th>
          <th class="col-1">"Familiar(es)"</th>
          <th class="col-1">Cual</th>
        </tr>
      </thead>
      <tbody>
        @foreach($heredo_fam as $heredo =>$value)
        <tr class="grayMarista">
          <th class="col-1">{{$heredo}}</th>
          @foreach($value as $dato)
          <th>{{$dato}}</th>
          @endforeach
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Antecedentes personales no patológicas
    </div>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-10">
    <table id="table" class="table table-hover">
      <thead>
        <tr class="yellowMarista">
          <th scope="col">Antecedentes</th>
          <th scope="col">Sí/No</th>
          <th scope="col">cual</th>
        </tr>
      </thead>
      <tbody>
        @foreach($no_patologico as $antecedente =>$value)
        <tr class="grayMarista">
          <th>{{$antecedente}}</th>
          @foreach($value as $dato)
          <th>{{$dato}}</th>
          @endforeach
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Antecedentes personales patológicas
    </div>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-10">
    <table id="table" class="table table-hover">
      <thead>
        <tr class="yellowMarista">
          <th scope="col">Antecedentes</th>
          <th scope="col">Sí/No</th>
          <th scope="col">cual</th>
        </tr>
      </thead>
      <tbody>
        @foreach($patologico as $antecedente =>$value)
        <tr class="grayMarista">
          <th>{{$antecedente}}</th>
          @foreach($value as $dato)
          <th>{{$dato}}</th>
          @endforeach
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@if($gineco_obs!=null)
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Antecedentes gineco obstetricos
    </div>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-10">
    <table id="table" class="table table-hover">
      <thead>
        <tr class="yellowMarista">
          <th scope="col">Antecedentes</th>
          <th scope="col">Sí/No</th>
          <th scope="col">cuantos</th>
          <th scope="col">fecha</th>
        </tr>
      </thead>
      <tbody>
        @foreach($gineco_obs as $antecedente =>$value)
        <tr class="grayMarista">
          <th>{{$antecedente}}</th>
          @foreach($value as $dato)
          <th>{{$dato}}</th>
          @endforeach
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

@endif
<a class='flotante' href='{{route("showDiagnoticoPaciente",["paciente"=>$paciente])}}' > Ver diagnosticos</a>

@endsection
