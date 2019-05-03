@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_antecedentes_familiares.css') }}}" rel="stylesheet">
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
    <form class="col s12" method="post" action="{{route('guardaDiagnostico')}}">
      {{ csrf_field() }}
      <input type="text" name="paciente" value="{{$paciente}}" hidden>
      <div class="row ">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea "name='inicio'></textarea>
          <label for="icon_prefix2">Inicio</label>
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

    <div class="row justify-content-md-center">
      <div class="col-10">
        <div class="row yellowMarista">
          <div class="col-5">Síntoma</div>
          <div class="col-5">Sí/No</div>
        </div>
        <div class="row grayMarista">
          <div class="col-5">Astenia</div>
          <div class="col-5">
            <p>
              <label>
                <input name="astenia" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="astenia" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-5">Andinamia</div>
          <div class="col-5">
            <p>
              <label>
                <input name="andinamia" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="andinamia" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-5">Anorexia</div>
          <div class="col-5">
            <p>
              <label>
                <input name="anorexia" type="radio" value="si"/>
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="anorexia" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-5">Fiebre</div>
          <div class="col-5">
            <p>
              <label>
                <input name="fiebre" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="fiebre" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-5">Perdida de peso</div>
          <div class="col-5">
            <p>
              <label>
                <input name="perdida_peso" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="perdida_peso" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    |
    </div>
    <div class="row justify-content-md-center">
      <div class="col-10">
        <div class="row yellowMarista">
          <div class="col-4">Aparato</div>
          <div class="col-2">Sí/No</div>
          <div class="col-4">Cuál</div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Aparato digestivo</div>
          <div class="col-2">
            <p>
              <label>
                <input name="digestivo" type="radio" value="si"/>
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="digestivo" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_digestivo" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Aparato cardiovascular</div>
          <div class="col-2">
            <p>
              <label>
                <input name="cardiovascular" type="radio"  value="si"/>
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="cardiovascular" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_cardiovascular" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Aparato respiratorio</div>
          <div class="col-2">
            <p>
              <label>
                <input name="respiratorio" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="respiratorio" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_respiratorio" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Aparato urinario</div>
          <div class="col-2">
            <p>
              <label>
                <input name="urinario" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="urinario" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_urinario" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Aparato genital</div>
          <div class="col-2">
            <p>
              <label>
                <input name="genital" type="radio" value="si"/>
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="genital" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_genital" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Aparato hematológico</div>
          <div class="col-2">
            <p>
              <label>
                <input name="hema" type="radio" value="si"/>
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="hema" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_hema" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Sistema endocrino</div>
          <div class="col-2">
            <p>
              <label>
                <input name="endocrino" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="endocrino" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_edocrino" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Sistema nervioso</div>
          <div class="col-2">
            <p>
              <label>
                <input name="nervioso" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="nervioso" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_nervioso" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Sistema sensorial</div>
          <div class="col-2">
            <p>
              <label>
                <input name="sensorial" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="sensorial" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_sensorial" placeholder="Cual">
          </div>
        </div>
        <div class="row grayMarista">
          <div class="col-4">Sistema osteomuscular</div>
          <div class="col-2">
            <p>
              <label>
                <input name="muscular" type="radio" value="si" />
                <span>Sí</span>
              </label>
            </p>
            <p>
              <label>
                <input name="muscular" type="radio" value="no" checked/>
                <span>No</span>
              </label>
            </p>
          </div>
          <div class="col-4">
            <input type="text" name="cual_muscular" placeholder="Cual">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    |
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="anterior" class="materialize-textarea "name='ant'></textarea>
      <label for="anterior">Diagnosticos anteriores</label>
    </div>

    <div class="row">
    |
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="estudios" class="materialize-textarea "name='estudios'></textarea>
      <label for="estudios">Estudios de gabinete/estudios de laboratorio</label>
    </div>

    <div class="row">
    |
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="tratamientos" class="materialize-textarea "name='tratamientos'></textarea>
      <label for="tratamientos">Tratamientos anteriores (tiempo, tipo)</label>
    </div>

    <div class="row">
    |
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="inquietudes" class="materialize-textarea "name='inquietud'></textarea>
      <label for="inquietudes">Inquietud subyacente</label>
    </div>
    <div class="row">
    |
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="dermatomas" class="materialize-textarea "name='dermatomas'></textarea>
      <label for="dermatomas">Dermatomas, miotomas y pares craneales</label>
    </div>
    <div class="row yellowMarista">
    Exploración Física
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="ta" class="materialize-textarea "name='ta'></textarea>
      <label for="ta">T.A.</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="fc" class="materialize-textarea "name='fc'></textarea>
      <label for="fc">F.C.</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="fr" class="materialize-textarea "name='fr'></textarea>
      <label for="fr">F.R.</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="temp" class="materialize-textarea "name='temp'></textarea>
      <label for="temp">Temp</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="talla" class="materialize-textarea "name='talla'></textarea>
      <label for="talla">Talla</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="s02" class="materialize-textarea "name='s02'></textarea>
      <label for="s02">S02</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="peso" class="materialize-textarea "name='peso'></textarea>
      <label for="peso">Peso actual</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="p_anterior" class="materialize-textarea "name='p_anterior'></textarea>
      <label for="p_anterior">Peso anterior</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id=p_ideal class="materialize-textarea "name='p_ideal'></textarea>
      <label for="p_ideal">Peso ideal</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="imc" class="materialize-textarea "name='imc'></textarea>
      <label for="imc">IMC</label>
    </div>
    <div class="row yellowMarista">
    Exploración general
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="conciencia" class="materialize-textarea "name='conciencia'></textarea>
      <label for="conciencia">Estado de conciencia</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="actitud" class="materialize-textarea "name='actitud'></textarea>
      <label for="actitud">Actitud</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="mov" class="materialize-textarea "name='mov'></textarea>
      <label for="mov">Movimientos anormales</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="postura" class="materialize-textarea "name='postura'></textarea>
      <label for="postura">Postura</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="marcha" class="materialize-textarea "name='marcha'></textarea>
      <label for="marca">Marcha</label>
    </div>

    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="nutricion" class="materialize-textarea "name='nutricion'></textarea>
      <label for="nutricion">Estado general de nutrición</label>
    </div>
    <div class="row yellowMarista">
    Exploración por región
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="piel" class="materialize-textarea "name='piel'></textarea>
      <label for="piel">Piel y anexos</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="cabeza" class="materialize-textarea "name='cabeza'></textarea>
      <label for="cabeza">Cabeza</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="ojos" class="materialize-textarea "name='ojos'></textarea>
      <label for="ojos">Ojos</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="oidos" class="materialize-textarea "name='oidos'></textarea>
      <label for="oidos">oidos</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="nariz" class="materialize-textarea "name='nariz'></textarea>
      <label for="nariz">nariz</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="boca" class="materialize-textarea "name='boca'></textarea>
      <label for="boca">boca</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="torax" class="materialize-textarea "name='torax'></textarea>
      <label for="torax">torax</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="vasos" class="materialize-textarea "name='vasos'></textarea>
      <label for="vasos">vasos</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="mamas" class="materialize-textarea "name='mamas'></textarea>
      <label for="mamas">mamas</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="genitales" class="materialize-textarea "name='genitales'></textarea>
      <label for="genitales">genitales</label>
    </div>
    <div class="row yellowMarista">
    Sistemas musculoesquelético por regiones: columna
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="cervical" class="materialize-textarea "name='cervical'></textarea>
      <label for="cervical">cervical</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="dorsolumbar" class="materialize-textarea "name='dorsolumbar'></textarea>
      <label for="dorsolumbar">dorsolumbar</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="sacroiliaca" class="materialize-textarea "name='sacroiliaca'></textarea>
      <label for="sacroiliaca">sacroiliaca</label>
    </div>
    <div class="row yellowMarista">
    Sistemas musculoesquelético por regiones: Miembro superior
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="hombros" class="materialize-textarea "name='hombros'></textarea>
      <label for="hombros">hombros</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="codo" class="materialize-textarea "name='codo'></textarea>
      <label for="codo">Codo</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="muneca" class="materialize-textarea "name='muneca'></textarea>
      <label for="muneca">muñeca</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="mano" class="materialize-textarea "name='mano'></textarea>
      <label for="mano">mano</label>
    </div>
    <div class="row yellowMarista">
    Sistemas musculoesquelético por regiones: Miembro inferior
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="cadera" class="materialize-textarea "name='cadera'></textarea>
      <label for="cadera">cadera</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="rodilla" class="materialize-textarea "name='rodilla'></textarea>
      <label for="rodilla">rodilla</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="tobillo" class="materialize-textarea "name='tobillo'></textarea>
      <label for="tobillo">tobillo</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="pie" class="materialize-textarea "name='pie'></textarea>
      <label for="pie">pie</label>
    </div>
    <div class="row yellowMarista">
    Postura
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="po_anterior" class="materialize-textarea "name='po_anterior'></textarea>
      <label for="po_anterior">anterior</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="lateral" class="materialize-textarea "name='lateral'></textarea>
      <label for="lateral">lateral</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="posterior" class="materialize-textarea "name='posterior'></textarea>
      <label for="posterior">posterior</label>
    </div>
    <div class="row yellowMarista">
    Diagnostico
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="diag" class="materialize-textarea "name='diag' required></textarea>
      <label for="diag">Diagnostico fisioterapeuta</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="pronostico" class="materialize-textarea "name='pronostico' required></textarea>
      <label for="pronostico">Pronóstico</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="objetivos" class="materialize-textarea "name='objetivos'></textarea>
      <label for="objetivos">Objetivos</label>
    </div>
    <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <textarea id="plan" class="materialize-textarea "name='plan' required></textarea>
      <label for="plan">Plan fisioterapéutico</label>
    </div>
    <div class="row">
      <button id="botonNext" class="btn waves-effect waves-light" type="submit">Guardar
        <i class="material-icons right">send</i>
      </button>
    </div>
  </form>
</div>



  @endsection
