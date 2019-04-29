@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_padecimiento.css') }}}" rel="stylesheet">
@endsection
@section('title','Historia Clinica')
@section('principal')
<div class="row col-md-auto">
  <div>
    <h3>Padecimiento actual</h3>
  </div>
</div>
<div class="row">
    <form class="col s12">
      <div class="row ">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Inicio</label>
          <img class="responsive-img image" src="{{{ asset('img/escala_eva.jpeg') }}}">
          <div class="row justify-content-lg-center">
            <div class="col-6">
              <p class="range-field">
                <input type="range" id="test5" min="0" max="10" />
              </p>
            </div>
          </div>
        </div>
      </div>

  </div>
  <div class="row">
      <div class="col s12">
        <div class="row ">
          <div class="input-field col s6">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
            <label for="icon_prefix2">Evolución</label>
            <img class="responsive-img image" src="{{{ asset('img/escala_eva.jpeg') }}}">
            <div class="row justify-content-lg-center">
              <div class="col-6">
                <p class="range-field">
                  <input type="range" id="test5" min="0" max="10" />
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </form>
    <div class="row">
      <button id="botonNext" class="btn waves-effect waves-light" type="submit" name="action">Síntomas generales
        <i class="material-icons right">send</i>
      </button>
    </div>


  @endsection
