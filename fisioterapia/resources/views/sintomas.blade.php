@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_antecedentes_familiares.css') }}}" rel="stylesheet">
@endsection
@section('title','Historia Clinica')
@section('principal')

<div id="histClinica" class="justify-content-center">
  <div class="row col-md-auto">
    <div>
      <h3>Sintomas generales</h3>
    </div>
  </div>
  <div class="row yellowMarista">
    <div class="col-6">Padecimiento</div>
    <div class="col-6">Sí/No</div>
  </div>
  <div class="row grayMarista">
    <div class="col-6">Astenia</div>
    <div class="col-6">
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
  </div>
  <div class="row ">
    <div class="col-6">Adinamita</div>
    <div class="col-6">
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
  </div>
  <div class="row grayMarista">
    <div class="col-6">Anorexia</div>
    <div class="col-6">
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
  </div>
  <div class="row">
    <div class="col-6">Fiebre</div>
    <div class="col-6">
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
  </div>
  <div class="row grayMarista">
    <div class="col-6">Perdida de peso</div>
    <div class="col-6">
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
  </div>
</div>
<div id="aparatos" class="justify-content-center">
  <div class="row col-md-auto">
    <div>
      <h3>Aparatos y sistemas</h3>
    </div>
  </div>
  <div class="row yellowMarista">
    <div class="col-4">Aparato/Sistema</div>
    <div class="col-4">Sí/No</div>
    <div class="col-4">¿Cuál?</div>
  </div>
  <div class="row grayMarista">
    <div class="col-4">Aparato digestivo</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>

  <div class="row ">
    <div class="col-4">Aparato cardiovascular</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>
  <div class="row grayMarista">
    <div class="col-4">Aparato respiratorio</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>

  <div class="row ">
    <div class="col-4">Aparato urinario</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>
  <div class="row grayMarista">
    <div class="col-4">Aparato genital</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>

  <div class="row ">
    <div class="col-4">Aparato hematológico</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>
  <div class="row grayMarista">
    <div class="col-4">Sistema endócrino</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>

  <div class="row ">
    <div class="col-4">Sistema nervioso</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>

  <div class="row grayMarista">
    <div class="col-4">Sistema sensorial</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>

  <div class="row ">
    <div class="col-4">Sistema osteomuscular</div>
    <div class="col-4">
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
    <div class="col-4">
      <input type="text" name="" placeholder="¿cuál?">
    </div>
  </div>
</div>
<div class="row">
  <h3>Diagnósticos anteriores</h3>
</div>
<div class="row">
  <form class="col s12">
    <div class="row ">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
        <label for="icon_prefix2">Diagnósticos anteriores</label>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <h3>Estudios de gabinete/estudios de laboratorio</h3>
</div>
<div class="row">
  <form class="col s12">
    <div class="row ">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
        <label for="icon_prefix2">Estudios de gabinete/estudios de laboratorio</label>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <h3>Tratamientos anteriores (Tiempo, tipo)</h3>
</div>
<div class="row">
  <form class="col s12">
    <div class="row ">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
        <label for="icon_prefix2">Tratamientos anteriores (Tiempo, tipo)</label>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <h3>Inquietud subyacente</h3>
</div>
<div class="row">
  <form class="col s12">
    <div class="row ">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
        <label for="icon_prefix2">Inquietud subyacente</label>
      </div>
    </div>
  </form>
</div>


@endsection
