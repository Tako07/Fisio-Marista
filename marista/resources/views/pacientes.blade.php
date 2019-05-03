@if(session('id_usuario') != null /* SI LA SESION EXISTE MUESTRA EL CONTENIDO */)
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
        if ((keynum == 8) || (keynum == 46) || event.keyCode == 13)return true;  
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
            @if(session('rol') == '1' || session('rol') == '2' || session('rol') == '3' || session('rol') == '4')
            <button id="btnNuevoPaciente" class="col-md-auto btn btn-lg" type="button" style="color: #fff;line-height: 50%;">Nuevo Paciente</button>
            @endif
          </div>
        </div>
      </form>
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
                <button id="buttonSearch" class="col-md-auto btn" type="button"
                  onclick="
                    document.getElementById('tituloModalAct').innerHTML='ACTUALIZACION DE {{$paciente->nombres}} {{$paciente->apaterno}} {{$paciente->amaterno}}';
                    document.getElementById('modalActualizaPaciente').style.display = 'block';
                    document.getElementById('inputCalleNumeroAct').focus();
                    document.getElementById('inputIdPacienteAct').value = '{{$paciente->id_paciente}}';
                    document.getElementById('inputCurpAct').value = '{{$paciente->curp}}';
                    document.getElementById('inputCalleNumeroAct').value = '{{$paciente->calle}}';
                    document.getElementById('inputColoniaAct').value = '{{$paciente->colonia}}';
                    document.getElementById('inputCPAct').value = '{{$paciente->codigo_postal}}';
                    document.getElementById('inputCelularAct').value = '{{$paciente->num_cel}}';
                    document.getElementById('inputReligionAct').value = '{{$paciente->religion}}';
                    document.getElementById('inputNombreFamAct').value = '{{$paciente->familiar_a_cargo}}';
                    document.getElementById('inputCelularFamAct').value = '{{$paciente->num_tel}}';
                  " title="EDITAR PACIENTE" style="background-color: rgba(255,183,0,0.8);">
                  <i class="large material-icons">edit</i>
                </button>
                <button id="buttonSearch" class="col-md-auto btn" type="button" onclick="javascript:location.href='{{route('showHistoriaPaciente',['paciente'=>$paciente->id_paciente])}}'" title="VER HISTORIAL" style="background-color: rgba(255,183,0,0.8);">
                  <i class="large material-icons">remove_red_eye</i>
                </button>
              </td>
            </tr>
          @php $cont=2 @endphp
          @elseif($cont==2)
            <tr>
              <th scope="row">{{$paciente->curp}}</th>
              <td>{{$paciente->nombres}}</td>
              <td>{{$paciente->apaterno}} {{$paciente->amaterno}}</td>
              <td>Calle: {{$paciente->calle}} Colonia: {{$paciente->colonia}}</td>
              <td>{{$paciente->edad}}</td>
              <td>
                @if(session('rol') == '1' || session('rol') == '2' || session('rol') == '3' || session('rol') == '4')
                <button id="buttonSearch" class="col-md-auto btn" type="button"
                  onclick="
                    document.getElementById('tituloModalAct').innerHTML='ACTUALIZACION DE {{$paciente->nombres}} {{$paciente->apaterno}} {{$paciente->amaterno}}';
                    document.getElementById('modalActualizaPaciente').style.display = 'block';
                    document.getElementById('inputCalleNumeroAct').focus();
                    document.getElementById('inputIdPacienteAct').value = '{{$paciente->id_paciente}}';
                    document.getElementById('inputCurpAct').value = '{{$paciente->curp}}';
                    document.getElementById('inputCalleNumeroAct').value = '{{$paciente->calle}}';
                    document.getElementById('inputColoniaAct').value = '{{$paciente->colonia}}';
                    document.getElementById('inputCPAct').value = '{{$paciente->codigo_postal}}';
                    document.getElementById('inputCelularAct').value = '{{$paciente->num_cel}}';
                    document.getElementById('inputReligionAct').value = '{{$paciente->religion}}';
                    document.getElementById('inputNombreFamAct').value = '{{$paciente->familiar_a_cargo}}';
                    document.getElementById('inputCelularFamAct').value = '{{$paciente->num_tel}}';
                  " title="EDITAR PACIENTE" style="background-color: rgba(255,183,0,0.8);">
                  <i class="large material-icons">edit</i>
                </button>
                @endif
                <button id="buttonSearch" class="col-md-auto btn" type="button" onclick="javascript:location.href='{{route('showHistoriaPaciente',['paciente'=>$paciente->id_paciente])}}'" title="VER HISTORIAL" style="background-color: rgba(255,183,0,0.8);">
                  <i class="large material-icons">remove_red_eye</i>
                </button>
              </td>
            </tr>
            @php $cont=1 @endphp
          @endif
        @endforeach
      </table>
    </div>

    <!-- MODAL PARA NUEVO PACIENTE -->
    <div id="modalNuevoPaciente" class="modalB">
      <!-- CONTENIDO -->
      <div class="modalB-content">
        <div class="modalB-header">
          <span class="closeB" id="span" style="font-size: 3vw;">&times;</span>
          <h2 style="font-size: 3vw;">REGISTRO DE PACIENTE</h2>
        </div>
        <div class="modalB-body">
          <form method="POST" action="{{ route('registrarPaciente') }}" id="formulario">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputCurp" name="curp" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="18">
                  <label for="inputCurp">CURP:</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <div class="input-field col s12">
                  <input type="text" class="form-control" name="nombre" id="inputNombre" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="30">
                  <label for="inputNombre">Nombre(s):</label>
                </div>
              </div>
              <div class="form-group col-md-4">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputApPat" name="apaterno" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="30">
                  <label for="inputApPat">Apellido Paterno:</label>
                </div>
              </div>
              <div class="form-group col-md-4">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputApMat" name="amaterno" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="30">
                  <label for="inputApMat">Apellido Materno:</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-1">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputEdad" name="edad" class="validate" onkeypress="return justNumbers(event);" required="required" maxlength="3">
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
                  <input type="text" class="form-control" id="inputNacionalidad" name="nacionalidad" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="30">
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
                  <input type="text" class="form-control" id="inputOcupacion" name="ocupacion" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="30">
                  <label for="inputNacionalidad">Ocupación:</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputCalleNumero" name="calle" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="50">
                  <label for="inputCalleNumero">Calle y Número:</label>
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputColonia" name="colonia" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="40">
                  <label for="inputColonia">Colonia:</label>
                </div>
              </div>
              <div class="form-group col-md-2">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputCP" name="cp" class="validate" onkeypress="return justNumbers(event);" required="required" maxlength="5">
                  <label for="inputCP">Código Postal:</label>
                </div>
              </div>
              <div class="form-group col-md-2">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputCelular" name="celular" class="validate" onkeypress="return justNumbers(event);" required="required" maxlength="10">
                  <label for="inputCelular">Celular:</label>
                </div>
              </div>
              <div class="form-group col-md-2">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputReligion" name="religion" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="20">
                  <label for="inputReligion">Religión:</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputNombreFam" name="familiar" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="50">
                  <label for="inputNombreFam">Nombre de familiar a quien llamar en caso de ser necesario:</label>
                </div>
              </div>
              <div class="form-group col-md-4">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputCelularFam" name="telefono" class="validate" onkeypress="return justNumbers(event);" required="required" maxlength="10">
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

    <!-- MODAL PARA ACTUALIZAR UN USUARIO -->
    <div id="modalActualizaPaciente" class="modalB">
      <!-- CONTENIDO -->
      <div class="modalB-content">
        <div class="modalB-header">
          <span class="closeB" id="spanAct" style="font-size: 3vw;">&times;</span>
          <h3 style="font-size: 3vw;" id="tituloModalAct">ACTUALIZACION DE PACIENTE</h3>
        </div>
        <div class="modalB-body">

          <form method="POST" action="{{ route('modificaPaciente',['x' => 1]) }}" id="formularioAct">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputCurpAct" value="1" name="curpAct" disabled class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="18">
                  <label for="inputCurpAct">CURP:</label>
                  <input type="hidden" id="inputIdPacienteAct" name="inputIdPacienteAct">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputCalleNumeroAct" name="calleAct" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="40">
                  <label for="inputCalleNumeroAct">Calle y Número:</label>
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="input-field col s12">
                  <input type="text" class="form-control" id="inputColoniaAct" name="coloniaAct" class="validate" value="1" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" required="required" maxlength="40">
                  <label for="inputColoniaAct">Colonia:</label>
                </div>
              </div>
              <div class="form-group col-md-2">
                <div class="input-field col s12">
                  <input type="text" value="1" class="form-control" id="inputCPAct" name="cpAct" class="validate" onkeypress="return justNumbers(event);" required="required" maxlength="5">
                  <label for="inputCPAct">Código Postal:</label>
                </div>
              </div>
              <div class="form-group col-md-2">
                <div class="input-field col s12">
                  <input type="text" value="1" class="form-control" id="inputCelularAct" name="celularAct" class="validate" onkeypress="return justNumbers(event);" required="required" maxlength="10">
                  <label for="inputCelularAct">Celular:</label>
                </div>
              </div>
              <div class="form-group col-md-2">
                <div class="input-field col s12">
                  <input type="text" value="1" class="form-control" id="inputReligionAct" name="religionAct" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  <label for="inputReligionAct" maxlength="20">Religión:</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <div class="input-field col s12">
                  <input type="text" value="1" class="form-control" id="inputNombreFamAct" name="familiarAct" class="validate" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="50">
                  <label for="inputNombreFamAct">Nombre de familiar a quien llamar en caso de ser necesario:</label>
                </div>
              </div>
              <div class="form-group col-md-4">
                <div class="input-field col s12">
                  <input type="text" value="1" class="form-control" id="inputCelularFamAct" name="telefonoAct" class="validate" onkeypress="return justNumbers(event);" required="required" maxlength="10">
                  <label for="inputCelularFamAct">Celular del familiar:</label>
                </div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="form-group col-md-12" style="text-align: center;">
                <button id="btnSubmit" class="col-md-auto btn btn-lg" type="button" style="background-color: rgba(255,183,0,0.8);color: #fff;line-height: 50%;" onclick="document.getElementById('modalActualizaPaciente').style.display = 'none';document.getElementById('paciente').focus();">Cancelar</button>
                <button id="btnSubmit" class="col-md-auto btn btn-lg" type="submit" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Modificar</button>
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
      <script>document.getElementById("paciente").focus();</script>
    @endif
  @endsection
  @section('more_script')
    <script>
      // OBTENER LOS MODAL
      var modal = document.getElementById('modalNuevoPaciente');
      var modalAct = document.getElementById('modalActualizaPaciente');
      // BOTON QUE ABRE EL MODAL NUEVO PACIENTE
      var btn = document.getElementById("btnNuevoPaciente");
      // SPAN QUE CIERRA LOS MODAL
      var span = document.getElementById("span");
      var spanAct = document.getElementById("spanAct");
      //CUANDO SE DE CLIC EN EL BOTON SE ABRE EL MODAL  
      @if(session('rol') == '1' || session('rol') == '2' || session('rol') == '3' || session('rol') == '4')    
      btn.onclick = function() {
        modal.style.display = "block";
        document.getElementById('inputCurp').focus();
      }
      @endif
      //CUANDO EL USUARIO DE CLIC AL SPAN SE CIERRA EL MODAL
      span.onclick = function() {
        modal.style.display = "none";
        document.getElementById('paciente').focus();
      }
      spanAct.onclick = function() {
        modalAct.style.display = "none";
        document.getElementById('paciente').focus();
      }
      //CUANDO SE DE CLIC EN OTRA PARTE QUE NO SEA EL MODAL SE CIERRA      
      window.onclick = function(event) {
        if (event.target == modal){
          modal.style.display = "none";
          document.getElementById('paciente').focus();
        }
        if (event.target == modalAct){
          modalAct.style.display = "none";
          document.getElementById('paciente').focus();
        }
      }
      $("#formulario").submit(function(event){
        swal('¡REGISTRO EXITOSO!', '', 'success');
      });
      $("#formularioAct").submit(function(event){
        swal('¡ACTUALIZACION EXITOSA!', '', 'success');
      });
      document.getElementById('paciente').focus();
    </script>
  @endsection
@else <!-- SI NO SE HA INICIADO SESION MANDA UN MENSAJE Y REGRESA AL LOGIN -->
    @section('title,Pacientes')
        @section('principal')
            <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
            <script src="{{{ asset('css/sweetalert/dist/sweetalert.min.js') }}}"></script>
            <div class="container">
                <div class="form-row">
                    <div class="col-lg-12">
                        <script>
                            swal('¡PRIMERO INICIA SESION!', '', 'error');
                            setTimeout("location.href='{{ route('verlogin') }}'",1000);
                        </script>
                    </div>
                </div>
            </div>
        @endsection
    @endsection
@endif