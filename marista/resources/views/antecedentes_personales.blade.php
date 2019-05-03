@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_antecedentes_personales.css') }}}" rel="stylesheet">
@endsection
@section('title','Historia Clinica')
@section('principal')
<form class="" action="{{route('ant_pers_registro')}}" method="post">
  @csrf
  <input type="text" name="curp" value="{{$curp}}" hidden>

  <div id="personalesNoPatologicos" class="justify-content-center">
    <div class="row col-md-auto">
      <div>
        <h3 class="titulo">Antecedentes Personales no patológicos</h3>
      </div>
    </div>

    <div class="row yellowMarista">
      <div class="col-4">Antecedente</div>
      <div class="col-3">Sí/No</div>
      <div class="col-5">¿Cuál?</div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Tipo de construcción no favoralble</div>
      <div class="col-3">
        <p>
          <label>
            <input name="construc"  value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="construc" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_construc" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Suelo no regular</div>
      <div class="col-3">
        <p>
          <label>
            <input name="suelo" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="suelo" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_suelo" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Escarela que dificultan actividades de la vida diaria (avd)</div>
      <div class="col-3">
        <p>
          <label>
            <input name="escalera" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="escalera" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_escalera" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Ventilación inadecuada</div>
      <div class="col-3">
        <p>
          <label>
            <input name="ventilacion" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="ventilacion" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_ventilacion" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Hacinamiento</div>
      <div class="col-3">
        <p>
          <label>
            <input name="hacina" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="hacina" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_hacina" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Adaptaciones y auxiliares para su avd</div>
      <div class="col-3">
        <p>
          <label>
            <input name="adaptaciones" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="adaptaciones" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_adaptaciones" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Servicios de agua</div>
      <div class="col-3">
        <p>
          <label>
            <input name="agua" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="agua" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_agua" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Servicios de luz</div>
      <div class="col-3">
        <p>
          <label>
            <input name="luz" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="luz" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_luz" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Servicios de drenaje inadecuados</div>
      <div class="col-3">
        <p>
          <label>
            <input name="drenaje" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="drenaje" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_drenaje" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Habitos personales de baño</div>
      <div class="col-3">
        <p>
          <label>
            <input name="habito" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="habito" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_habito" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Higiene bucal</div>
      <div class="col-3">
        <p>
          <label>
            <input name="bucal" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="bucal" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_bucal" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Defecación</div>
      <div class="col-3">
        <p>
          <label>
            <input name="popis" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="popis" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_popis" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Tabaquismo</div>
      <div class="col-3">
        <p>
          <label>
            <input name="tabaco" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="tabaco" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_tabaco" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Alcoholismo</div>
      <div class="col-3">
        <p>
          <label>
            <input name="alcohol" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="alcohol" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_alcohol" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Toxicomanías</div>
      <div class="col-3">
        <p>
          <label>
            <input name="droga" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="droga" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_droga" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Alimentación</div>
      <div class="col-3">
        <p>
          <label>
            <input name="comida" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="comida" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_comida " id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Trabajo/descanso</div>
      <div class="col-3">
        <p>
          <label>
            <input name="trabajo" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="trabajo" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_trabajo" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Pasatiempo</div>
      <div class="col-3">
        <p>
          <label>
            <input name="pasa" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="pasa" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_pasa" id="first_name" type="text" class="validate">
      </div>
    </div>


  </div>
  <div id="personalesPatologicos" class="justify-content-center">
    <div class="row col-md-auto">
      <div>
        <h3 class="titulo">Antecedentes Personales patológicos</h3>
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
            <input name="infancia" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="infancia" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_infancia" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Intervenciones quirúrjicas</div>
      <div class="col-3">
        <p>
          <label>
            <input name="intervencion" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="intervencion" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_intervencion" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Traumatismos (Esguinces, fracturas, luxaciones, desgarres)</div>
      <div class="col-3">
        <p>
          <label>
            <input name="traumatismo" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="traumatismo" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_traumatismo" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Infiltraciones</div>
      <div class="col-3">
        <p>
          <label>
            <input name="infiltracion" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="infiltracion" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_infiltracion" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Hospitalizaciones</div>
      <div class="col-3">
        <p>
          <label>
            <input name="hospital" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="hospital" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_hospital" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">Perdida del conocimiento</div>
      <div class="col-3">
        <p>
          <label>
            <input name="conocimiento" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="conocimiento" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_conocimiento" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Intolerancia a medicamentos</div>
      <div class="col-3">
        <p>
          <label>
            <input name="intolerancia" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="intolerancia" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_intolerancia" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row ">
      <div class="col-4">Transfuciones</div>
      <div class="col-3">
        <p>
          <label>
            <input name="transfucion" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="transfucion" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_transfucion" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-4">Medicamentos</div>
      <div class="col-3">
        <p>
          <label>
            <input name="medi" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="medi" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_medi" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-4">ETS</div>
      <div class="col-3">
        <p>
          <label>
            <input name="ets" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="ets" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-5">
        <input placeholder="Padecimiento" name="cual_ets" id="first_name" type="text" class="validate">
      </div>
    </div>
  </div>

  <div id="personalesGineco" class="justify-content-center">
    <div class="row col-md-auto">
      <div>
        <h3 class="titulo">Antecedentes Gineco-obstéricos</h3>
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
            <input name="menarca" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="menarca" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Cuántos?" name="cant_menaca" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Fecha"  name="cual_menaca" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Ritmo menstrual</div>
      <div class="col-2">
        <p>
          <label>
            <input name="mens" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="mens" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Cuántos?" name="cant_mens" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Fecha" name="cual_mens" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Partos</div>
      <div class="col-2">
        <p>
          <label>
            <input name="parto" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="parto" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Cuántos?" name="cant_parto" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Fecha" name="cual_parto" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Abortos</div>
      <div class="col-2">
        <p>
          <label>
            <input name="aborto" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="aborto" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Cuántos?" name="cant_aborto" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Fecha" name="cual_aborto" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Cesáreas</div>
      <div class="col-2">
        <p>
          <label>
            <input name="cesarea" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="cesarea" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Cuántos?" name="cant_cesarea" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Fecha"name="cual_cesarea" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Métodos anticonceptivos</div>
      <div class="col-2">
        <p>
          <label>
            <input name="anti" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="anti" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Cuántos?" name="cant_anti" id="first_name" type="text" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Fecha" name="cual_anti" id="first_name" type="text" class="validate">
      </div>
    </div>


    <div class="row">
      <button id="botonNext" class="btn waves-effect waves-light" type="submit">Antecedentes personales no patológicos
        <i class="material-icons right">send</i>
      </button>
    </div>


  </div>
</form>


@endsection
