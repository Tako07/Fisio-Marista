@extends('layouts.navBar')
@section('title','Pacientes')
@section('more_style')
  <link rel="stylesheet" href="{{{ asset('css/bootstrap4.3.1/css/bootstrap.min.css') }}}">
  <script src=" {{{ asset('css/bootstrap4.3.1/js/jquery-3.3.1.slim.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/popper.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/bootstrap.min.js') }}}"></script>
  <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
  <script src="{{{ asset('css/sweetalert/dist/sweetalert.min.js') }}}"></script>

  <script type="text/javascript">
    function justNumbers(e){
      var keynum = window.event ? window.event.keyCode : e.which;
      if ((keynum == 8) || (keynum == 46) || event.keyCode == 13)
        return true;  
      return /\d/.test(String.fromCharCode(keynum));
    }
  </script>

@endsection
@section('principal')
<div class="container border contenido" style="border-radius: 2vw;width: 30%;padding-top: 0.5%;padding-bottom: 0.5%;background-color: #ffc533;text-align: center;">
      <h1 style="font-size: 2vw;">LISTADO DE PACIENTES</h1>
</div>

<div id="search" class="container" style="padding-top: 2%;">
  <form method="get" action="{{route('showPacientes')}}">
  <div class="row justify-content-md-center">
      <div class="col-lg-4">
        <div class="input-field col s12">
        <input type="text" class="form-control validate" id="paciente" name="paciente" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" />
        <label for="paciente">Buscar Paciente (Curp, Nombre(s), Apellidos)</label>
      </div>
      </div>
      <div class="col-md-auto">
        <br>
        <button id="buttonSearch" class="col-md-auto btn" type="submit" title="Buscar Paciente">
          <i class="large material-icons">search</i>
        </button>
        <button id="buttonSearch" class="col-md-auto btn" type="button" title="Ver todos los pacientes" onclick="javascript:location.href='{{ route('showPacientes') }}'">
          <i class="large material-icons">restore_page</i>
        </button>
      </div>
    <div class="col-md-auto">
      <br>
      <button id="btnNuevoPaciente" class="col-md-auto btn btn-lg" type="button" style="color: #fff;line-height: 50%;">Nuevo Paciente</button>
    </div>
    </form>
  </div>
</div>

<div class="table-responsive-md">
  <table class="table table-hover">
  <thead>
    <tr class="yellowMarista">
      <th scope="col">CURP</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Edad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
    @php $numPac = 0; @endphp
    @foreach($pacientes as $paciente)
      @php $numPac += 1; @endphp
      @if($cont==1)
        <tr class="grayMarista">
          <th scope="row">{{$paciente->curp}}</th>
          <td>{{$paciente->nombres}}</td>
          <td>{{$paciente->apaterno}} {{$paciente->amaterno}}</td>
          <td>Calle: {{$paciente->calle}} Colonia: {{$paciente->colonia}}</td>
          <td>{{$paciente->edad}}</td>
          <td>
            <button id="buttonSearch" class="col-md-auto btn" type="button" onclick="javascript:location.href=''" title="EDITAR PACIENTE" style="background-color: rgba(255,183,0,0.8);">
            <i class="large material-icons">edit</i>
            </button>
            <button id="buttonSearch" class="col-md-auto btn" type="button" onclick="javascript:location.href=''" title="VER HISTORIAL" style="background-color: rgba(255,183,0,0.8);">
            <i class="large material-icons">remove_red_eye</i>
            </button>
          </td>
        </tr>
        @php
          $cont=2
        @endphp
      @elseif($cont==2)
      <tr>
        <th scope="row">{{$paciente->curp}}</th>
        <td>{{$paciente->nombres}}</td>
        <td>{{$paciente->apaterno}} {{$paciente->amaterno}}</td>
        <td>Calle: {{$paciente->calle}} Colonia: {{$paciente->colonia}}</td>
        <td>{{$paciente->edad}}</td>
        <td>
          <button id="buttonSearch" class="col-md-auto btn" type="button" onclick="javascript:location.href=''" title="EDITAR PACIENTE" style="background-color: rgba(255,183,0,0.8);">
            <i class="large material-icons">edit</i>
          </button>
          <button id="buttonSearch" class="col-md-auto btn" type="button" onclick="javascript:location.href=''" title="VER HISTORIAL" style="background-color: rgba(255,183,0,0.8);">
            <i class="large material-icons">remove_red_eye</i></button>
        </td>
      </tr>
        @php
          $cont=1
        @endphp
      @endif
    @endforeach
  </table>
</div>

<!-- The Modal -->
<div id="modalNuevoPaciente" class="modalB">

  <!-- Modal content -->
  <div class="modalB-content">
    <div class="modalB-header">
      <span class="closeB" style="font-size: 3vw;">&times;</span>
      <h2 style="font-size: 3vw;">REGISTRO DE PACIENTE</h2>
    </div>
    <div class="modalB-body">

      <form method="POST" action="{{ route('registrarPaciente') }}" id="formulario">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-12">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputCurp" name="curp" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputCurp">CURP:</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <div class="input-field col s12">
              <input type="text" class="form-control" name="nombre" id="inputNombre" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputNombre">Nombre(s):</label>
            </div>
          </div>
          <div class="form-group col-md-4">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputApPat" name="apaterno" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputApPat">Apellido Paterno:</label>
            </div>
          </div>
          <div class="form-group col-md-4">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputApMat" name="amaterno" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputApMat">Apellido Materno:</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-1">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputEdad" name="edad" class="validate" onkeypress="return justNumbers(event);" required="required">
              <label for="inputEdad">Edad:</label>
            </div>
          </div>
          <div class="form-group col-md-1">
            <label for="radioSexo">Sexo:</label>
            <div>
              <label>
                <input type="radio" class="form-control" name="radioSexo" value="M" checked><span>M</span>
              </label>
            </div>
            <div>
              <label>
                <input type="radio" class="form-control" name="radioSexo" value="F"><span>F</span>
              </label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <label for="inputFechaNac">Fecha Nacimiento:</label>
            <input type="date" class="form-control" id="inputFechaNac" name="fechaNacimiento" required="required">
          </div>
          <div class="form-group col-md-3">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputNacionalidad" name="nacionalidad" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputNacionalidad">Nacionalidad:</label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <label for="radioSexo">Estado civil:</label>
            <div>
              <label>
                <input type="radio" class="form-control" name="radioEdo" value="S"><span>Soltero</span>
              </label>
            </div>
            <div>
              <label>
                <input type="radio" class="form-control" name="radioEdo" value="C"><span>Casado</span>
              </label>
            </div>
          </div>
          <div class="form-group col-md-3">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputNacionalidad" name="ocupacion" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputNacionalidad">Ocupación:</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputCalleNumero" name="calle" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputCalleNumero">Calle y Número:</label>
            </div>
          </div>
          <div class="form-group col-md-3">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputColonia" name="colonia" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required">
              <label for="inputColonia">Colonia:</label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputCP" name="cp" class="validate" onkeypress="return justNumbers(event);" required="required">
              <label for="inputCP">Código Postal:</label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputCelular" name="celular" class="validate" onkeypress="return justNumbers(event);" required="required">
              <label for="inputCelular">Celular:</label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputReligion" name="religion" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
              <label for="inputReligion">Religión:</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputNombreFam" name="familiar" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
              <label for="inputNombreFam">Nombre de familiar a quien llamar en caso de ser necesario:</label>
            </div>
          </div>
          <div class="form-group col-md-4">
            <div class="input-field col s12">
              <input type="text" class="form-control" id="inputCelularFam" name="telefono" class="validate" onkeypress="return justNumbers(event);" required="required">
              <label for="inputCelularFam">Celular del familiar:</label>
            </div>
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="form-group col-md-12" style="text-align: center;">
            <button id="btnSubmit" class="col-md-auto btn btn-lg" type="button" style="background-color: rgba(255,183,0,0.8);color: #fff;line-height: 50%;" onclick="document.getElementById('modalNuevoPaciente').style.display = 'none';document.getElementById('paciente').focus();">Cancelar</button>
            <button id="btnSubmit" class="col-md-auto btn btn-lg" type="submit" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Guardar</button>
          </div>
        </div>
      </form>

    </div>
    <div class="modalB-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div>

@if($numPac == 0)
      <h5>SIN RESULTADOS DE BUSQUEDA</h5>
      <script>
        document.getElementById("paciente").focus();
      </script>
    @endif
@endsection
@section('more_script')
<script>
  // Get the modal
  var modal = document.getElementById('modalNuevoPaciente');
  // Get the button that opens the modal
  var btn = document.getElementById("btnNuevoPaciente");
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("closeB")[0];
  // When the user clicks the button, open the modal
      
  btn.onclick = function() {modal.style.display = "block";
  document.getElementById('inputCurp').focus();}
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {modal.style.display = "none";
  document.getElementById('paciente').focus();}
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal){
      modal.style.display = "none";
      document.getElementById('paciente').focus();
    }
  }
  $("#formulario").submit(function(event){
    swal('¡REGISTRO EXITOSO!', '', 'success');
  });
  document.getElementById('paciente').focus();
</script>
@endsection
