@extends('layouts.navBar')
@section('title','Historia Clinica')
@section('principal')
  <div  class="row justify-content-md-center">
    <div class="col-md-auto">
      <div>
        <h3>Antecedentes Heredo Familiares</h3>
      </div>
    </div>
  </div>
  <div class="justify-content-md-center">
    <div class="row">
      <div class="col-md-2">Padecimiento</div>
      <div class="col-md-2">Sí/No</div>
      <div class="col-md-2">¿Quién?</div>
      <div class="col-md-2">¿Cuál padecimiento?</div>
    </div>
    <div class="row">
      <div class="col-md-2">Enfermedades reumatológicas</div>
      <div class="col-md-2">
        <p>
        <label>
          <input name="yourchoice" type="radio" checked />
          <span>Yes</span>
        </label>
        </p>
        <p>
          <label>
            <input name="yourchoice" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-md-2">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
    </div>
  </div>
@endsection
