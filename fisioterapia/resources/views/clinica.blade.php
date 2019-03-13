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
  <div class="row justify-content-md-center">
    <div class="col-md-auto">
      padecimiento
    </div>
    <div class="col-md-auto">
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
    <div class="col-md-auto">
      ¿quien?
    </div>
  </div>
@endsection
