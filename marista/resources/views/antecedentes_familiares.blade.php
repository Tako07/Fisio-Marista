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
  <form class="" action="{{ route('ant_fam_registro') }}" method="post">
    @csrf
    <input type="text" name="curp" value="{{$curp}}" hidden>
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
            <input name="reumatologico" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="reumatologico" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_reumatologico" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" name="cual_reumatologico" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Enfermedades del sistema nervioso</div>
      <div class="col-2">
        <p>
          <label>
            <input name="nervioso" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="nervioso" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_nervioso" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_nervioso" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Síndromes</div>
      <div class="col-2">
        <p>
          <label>
            <input name="sindrome" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="sindrome" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_sindrome" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_sindrome" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Malformaciones</div>
      <div class="col-2">
        <p>
          <label>
            <input name="malformacion" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="malformacion" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_malformacion" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_malformacion" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Congenitas</div>
      <div class="col-2">
        <p>
          <label>
            <input name="congenita" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="congenita" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_congenita" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_congenita" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Diabetes</div>
      <div class="col-2">
        <p>
          <label>
            <input name="diabetes" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="diabetes" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_diabetes" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_diabetes" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Hipertensión arterial sistemática</div>
      <div class="col-2">
        <p>
          <label>
            <input name="has" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="has" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_has" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_has" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Cáncer</div>
      <div class="col-2">
        <p>
          <label>
            <input name="cancer" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="cancer" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_cancer" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_cancer" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Cardiopatías</div>
      <div class="col-2">
        <p>
          <label>
            <input name="cardiopatia" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="cardiopatia" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_cardiopatia" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_cardiopatia" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Vasculares</div>
      <div class="col-2">
        <p>
          <label>
            <input name="vascular" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="vascular" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_vascular" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_vascular" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Pulmonares</div>
      <div class="col-2">
        <p>
          <label>
            <input name="pulmonar" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="pulmonar" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_pulmonar" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_pulmonar" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Heptopatías</div>
      <div class="col-2">
        <p>
          <label>
            <input name="heptopatia" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="heptopatia" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_heptopatia" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_heptopatia" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Nefropatías</div>
      <div class="col-2">
        <p>
          <label>
            <input name="nefropatia" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="nefopatia" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_nefrotapia" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" name="cual_nefropatia" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Digestivos</div>
      <div class="col-2">
        <p>
          <label>
            <input name="digestivo" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="digestivo" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_digestivo" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_digestivo" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Endocrinopatías</div>
      <div class="col-2">
        <p>
          <label>
            <input name="endocri" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="endocri" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_endocri" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" name="cual_endocri" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Transtornos hematológicos</div>
      <div class="col-2">
        <p>
          <label>
            <input name="hematologico" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="hematologico" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_hematologico" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" name="cual_hematologico" class="validate">
      </div>
    </div>
    <div class="row grayMarista">
      <div class="col-3">Dislipidemias</div>
      <div class="col-2">
        <p>
          <label>
            <input name="disli" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
        <label>
          <input name="disli" value="no" type="radio" />
          <span>No</span>
        </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_disli" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" name="cual_disli" id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
      <div class="col-3">Otros</div>
      <div class="col-2">
        <p>
          <label>
            <input name="otros" value="si" type="radio" checked />
            <span>Sí</span>
          </label>
        </p>
        <p>
          <label>
            <input name="otros" value="no" type="radio" />
            <span>No</span>
          </label>
        </p>
      </div>
      <div class="col-3">
        <input placeholder="¿Quién?" id="first_name" type="text" name="quien_otros" class="validate">
      </div>
      <div class="col-4">
        <input placeholder="Padecimiento" id="first_name" type="text" name="cual_otros" class="validate">
      </div>
    </div>


    <div class="row">
      <button id="botonNext" class="btn waves-effect waves-light" type="submit">Antecedentes personales no patológicos
        <i class="material-icons right">send</i>
      </button>
    </div>
  </form>

  </div>

@endsection
