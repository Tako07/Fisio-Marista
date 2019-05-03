@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_padecimiento.css') }}}" rel="stylesheet">
<link href="{{{ asset('css/style_antecedentes_familiares.css') }}}" rel="stylesheet">
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
<form class="" action="{{route('guardaNota')}}" method="post">
  @csrf
<input type="hidden" name="paciente" value="{{$paciente}}">
<input type="hidden" name="diagnostico" value="{{$diagnostico}}">
<div class="row justify-content-md-center">
  <div class="col-10">
    <div class="row ">
      <div class="input-field col s6">
        <img class="responsive-img image" src="{{{ asset('img/escala_eva.jpeg') }}}">
        <div class="row justify-content-lg-center">
          <div class="col-6">
            <p class="range-field">
              <input type="range" id="test5" name='eva' min="0" max="10" />
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea "name='pru_funcional'></textarea>
        <label for="icon_prefix2">Pruebas funcionales</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea "name='act_funcional'></textarea>
        <label for="icon_prefix2">Actividades funcionales</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea "name='fuerza'></textarea>
        <label for="icon_prefix2">Fuerza</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea "name='rom'></textarea>
        <label for="icon_prefix2">ROM</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <button type="submit" class="btn">Guardar</button>
      </div>
    </div>
  </div>
  </div>
</form>

@endsection
