@extends('layouts.navBar')
@section('more_style')
  <link rel="stylesheet" href="{{{ asset('css/bootstrap4.3.1/css/bootstrap.min.css') }}}">
  <script src=" {{{ asset('css/bootstrap4.3.1/js/jquery-3.3.1.slim.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/popper.min.js') }}}"></script>
  <script src=" {{{ asset('css/bootstrap4.3.1/js/bootstrap.min.js') }}}"></script>
  <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
@endsection
@section('title','PACIENTES')
@section('principal')
<div style="padding-top: 2%;"></div>
<div class="container border" style="border-radius: 2vw;width: 30%;padding-top: 0.5%;padding-bottom: 0.5%;background-color: #ffc533;text-align: center;">
      <h1 style="font-size: 2vw;">LISTADO DE PACIENTES</h1>
</div>

<div id="search" class="container" style="padding-top: 2%;">
  <div class="row justify-content-md-center">
    <div class="col-lg-4">
      <input type="text" class="search-query form-control" placeholder="Buscar Pacientes" />
    </div>
    <div class="col-md-auto">
      <button id="buttonSearch" class="col-md-auto btn" type="button">
        <i class="large material-icons">search</i>
      </button>
    </div>
    <div class="col-md-auto">
      <button id="btnNuevoPaciente" class="col-md-auto btn btn-lg" type="button" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Nuevo Paciente</button>
    </div>
  </div>
</div>

<div class="table-responsive-md">
  <table class="table table-hover">
  <thead>
    <tr class="yellowMarista">
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Ocupacion</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr class="grayMarista">
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Calle: calle #1 Colonia: colonia</td>
      <td>Ingeniero</td>
      <td>25/08/1996</td>
      <td><a href="historiaClinica/clinica">Ver historial</a></td>
    </tr>
    <tr>
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Calle: calle #1 Colonia: colonia</td>
      <td>Ingeniero</td>
      <td>25/08/1996</td>
      <td><a href="historiaClinica/clinica">Ver historial</a></td>
    </tr>
    <tr class="grayMarista">
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Calle: calle #1 Colonia: colonia</td>
      <td>Ingeniero</td>
      <td>25/08/1996</td>
      <td><a href="historiaClinica/clinica">Ver historial</a></td>
    </tr>
    <tr>
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Calle: calle #1 Colonia: colonia</td>
      <td>Ingeniero</td>
      <td>25/08/1996</td>
      <td><a href="historiaClinica/clinica">Ver historial</a></td>
    </tr>
    <tr class="grayMarista">
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Calle: calle #1 Colonia: colonia</td>
      <td>Ingeniero</td>
      <td>25/08/1996</td>
      <td><a href="historiaClinica/clinica">Ver historial</a></td>
    </tr>
    <tr>
      <th scope="row">Pepito</th>
      <td>Martinez Robles</td>
      <td>Calle: calle #1 Colonia: colonia</td>
      <td>Ingeniero</td>
      <td>25/08/1996</td>
      <td><a href="historiaClinica/clinica">Ver historial</a></td>
    </tr>
  </tbody>
  </table>
</div>

<!-- The Modal -->
<div id="modalNuevoPaciente" class="modalB">

  <!-- Modal content -->
  <div class="modalB-content">
    <div class="modalB-header">
      <span class="closeB">&times;</span>
      <h2>REGISTRO DE PACIENTE</h2>
    </div>
    <div class="modalB-body">
      
      <form>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputNombre">Nombre:</label>
            <input type="text" class="form-control" id="inputNombre" placeholder="Nombre del Paciente">
          </div>
          <div class="form-group col-md-4">
            <label for="inputApPat">Apellido Paterno:</label>
            <input type="text" class="form-control" id="inputApPat" placeholder="Apellido Paterno">
          </div>
          <div class="form-group col-md-4">
            <label for="inputApMat">Apellido Materno:</label>
            <input type="text" class="form-control" id="inputApMat" placeholder="Apellido Materno">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="inputEdad">Edad:</label>
            <input type="text" class="form-control" id="inputEdad" placeholder="Edad">
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
          <div class="form-group col-md-3">
            <label for="inputNacionalidad">Nacionalidad:</label>
            <input type="text" class="form-control" id="inputNacionalidad" placeholder="Nacionalidad">
          </div>
          <div class="form-group col-md-3">
            <label for="inputNacionalidad">Edo. Civil:</label>
            <input type="text" class="form-control" id="inputNacionalidad" placeholder="Estado Civil">
          </div>
          <div class="form-group col-md-3">
            <label for="inputNacionalidad">Ocupación:</label>
            <input type="text" class="form-control" id="inputNacionalidad" placeholder="Ocupacion">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputCalleNumero">Calle y Número:</label>
            <input type="text" class="form-control" id="inputCalleNumero" placeholder="Calle y Número">
          </div>
          <div class="form-group col-md-3">
            <label for="inputColonia">Colonia:</label>
            <input type="text" class="form-control" id="inputColonia" placeholder="Colonia">
          </div>
          <div class="form-group col-md-2">
            <label for="inputCP">Código Postal:</label>
            <input type="text" class="form-control" id="inputCP" placeholder="Código Postal">
          </div>
          <div class="form-group col-md-2">
            <label for="inputCelular">Celular:</label>
            <input type="text" class="form-control" id="inputCelular" placeholder="Número de celular">
          </div>
          <div class="form-group col-md-2">
            <label for="inputReligion">Religión:</label>
            <input type="text" class="form-control" id="inputReligion" placeholder="Religión">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputNombreFam">Nombre de familiar a quien llamar en caso de ser necesario:</label>
            <input type="text" class="form-control" id="inputNombreFam" placeholder="Nombre del familiar">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCelularFam">Celular del familiar:</label>
            <input type="text" class="form-control" id="inputCelularFam" placeholder="Número de celular del familiar">
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="form-group col-md-12" style="text-align: center;">
            <button id="btnSubmit" class="col-md-auto btn btn-lg" type="button" style="background-color: rgba(255,183,0,0.8);color: #fff;line-height: 50%;">Cancelar</button>
            <button id="btnSubmit" class="col-md-auto btn btn-lg" type="button" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Guardar</button>
          </div>
        </div>
      </form>

    </div>
    <div class="modalB-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div>

<script>
  // Get the modal
  var modal = document.getElementById('modalNuevoPaciente');
  // Get the button that opens the modal
  var btn = document.getElementById("btnNuevoPaciente");
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("closeB")[0];
  // When the user clicks the button, open the modal 
  btn.onclick = function() {modal.style.display = "block";}
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {modal.style.display = "none";}
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal)modal.style.display = "none";
  }
</script>
@endsection
