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
    <div class="col-md-auto">
      <button id="buttonSearch" class=" col-md-auto btn" type="button">
        <i class="large material-icons">search</i>
      </button>
    </div>

  </div>
</div>



<table class="table table-hover">
  <thead>
    <tr class="yellowMarista">
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Ocupación</th>
      <th scope="col">Fecha de cita</th>
      <th scope="col">Historial</th>
    </tr>
  </thead>
  <tbody>
    <tr class="grayMarista">
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Arquitecto</td>
      <td>12/01/2020</td>
      <td><a href="historiaClinica/clinica">Ver historial</a></td>
    </tr>
    <tr>
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Arquitecto</td>
      <td>12/01/2020</td>
      <td><a href="#">Ver historial</a></td>
    </tr>
    <tr class="grayMarista">
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Arquitecto</td>
      <td>12/01/2020</td>
      <td><a href="#">Ver historial</a></td>
    </tr>
    <tr>
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Arquitecto</td>
      <td>12/01/2020</td>
      <td><a href="#">Ver historial</a></td>
    </tr>
    <tr class="grayMarista">
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Arquitecto</td>
      <td>12/01/2020</td>
      <td><a href="#">Ver historial</a></td>
    </tr>
    <tr>
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Arquitecto</td>
      <td>12/01/2020</td>
      <td><a href="#">Ver historial</a></td>
    </tr>
  </tbody>
</table>

@endsection
