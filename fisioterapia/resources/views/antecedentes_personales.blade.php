@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_antecedentes_personales.css') }}}" rel="stylesheet">
@endsection
@section('title','Historia Clinica')
@section('principal')
  <div id="personalesNoPatologicos" class="justify-content-center">
    <div class="row col-md-auto">
      <div>
        <h3>Antecedentes Personales no patológicos</h3>
      </div>
    </div>
    <div class="row yellowMarista">
      <div class="col-4">Antecedente</div>
      <div class="col-3">Sí/No</div>
      <div class="col-5">¿Cuál padecimiento?</div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Tipo de construcción no favoralble</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Suelo no regular</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Escarela que dificultan actividades de la vida diaria (avd)</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Ventilación inadecuada</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Hacinamiento</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Adaptaciones y auxiliares para su avd</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Servicios de agua</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Servicios de luz</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Servicios de drenaje inadecuados</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>


  </div>
  <div id="personalesPatologicos" class="justify-content-center">
    <div class="row col-md-auto">
      <div>
        <h3>Antecedentes Personales patológicos</h3>
      </div>
    </div>
    <div class="row yellowMarista">
      <div class="col-4">Antecedente</div>
      <div class="col-3">Sí/No</div>
      <div class="col-5">¿Cuál padecimiento?</div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Enfermedades infecciosas de la infancia</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Intervenciones quirúrjicas</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Traumatismos (Esguinces, fracturas, luxaciones, desgarres)</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Infiltraciones</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Hospitalizaciones</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Perdida del conocimiento</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Intolerancia a medicamentos</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row ">
      <div class="col-4">Transfuciones</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Medicamentos</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">ETS</div>
      <div class="col-3">
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
      <div class="col-5">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
  </div>
  <div id="personalesGineco" class="justify-content-center">
    <div class="row col-md-auto">
      <div>
        <h3>Antecedentes Gineco-obstéricos</h3>
      </div>
    </div>
    <div class="row yellowMarista">
      <div class="col-3">Padecimiento</div>
      <div class="col-2">Sí/No</div>
      <div class="col-3">¿Cuántos?</div>
      <div class="col-4">Fecha</div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Menarca</div>
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
        <input placeholder="¿Cuántos?" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Ritmo menstrual</div>
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
        <input placeholder="¿Cuántos?" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Partos</div>
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
        <input placeholder="¿Cuántos?" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Abortos</div>
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
        <input placeholder="¿Cuántos?" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Cesáreas</div>
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
        <input placeholder="¿Cuántos?" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Métodos anticonceptivos</div>
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
        <input placeholder="¿Cuántos?" id="first_name" type="text" class="validate">
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
