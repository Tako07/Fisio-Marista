@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_antecedentes_familiares.css') }}}" rel="stylesheet">
@endsection
@section('title','Historia Clinica')
@section('principal')
  <div id="histClinica" class="justify-content-center">
    <div class="row col-md-auto">
      <div>
        <h3 class="titulo">Antecedentes Heredo Familiares</h3>
      </div>
    </div>
    <div class="row yellowMarista">
      <div class="col-3">Padecimiento</div>
      <div class="col-2">Sí/No</div>
      <div class="col-3">¿Quién?</div>
      <div class="col-4">¿Cuál padecimiento?</div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Enfermedades reumatológicas</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="yourchoice" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Enfermedades del sistema nervioso</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Síndromes</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Malformaciones</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Congenitas</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Diabetes</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Hipertensión arterial sistemática</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Cancer</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Cardiopatias</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Vasculares</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Pulmonares</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Heptopatías</div>
      <div class="col-2">
        <p>
          <label>
            <input name="yourchoice" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="yourchoice" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <select>
          <option>Madre</option>
          <option>Padre</option>
          <option>Hermanos</option>
          <option>Abuelos</option>
          <option>otros</option>
        </select>
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>


    <div class="row">
      <button id="botonNext" class="btn waves-effect waves-light" type="submit" name="action">Antecedentes personales no patológicos
        <i class="material-icons right">send</i>
      </button>
    </div>

  </div>


@endsection
