@extends('layouts.appl')
@section('stylesheet')
<link href="{{{ asset('css/style_navbar.css') }}}" rel="stylesheet">
<link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    @yield('more_style')
@endsection
@section('title','Barra de navegación')

@section('content')

<nav>
  <div id="nav" class="nav-wrapper container-fluid">

    <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-small show-on-medium-and-up">
      <i class="material-icons">menu</i>
    </a>

      <div id="logo" class="row">
        <div class="col s6">
          <a  href="{{route('inicio')}}"><img id="img_logo" class="resposive-img" src="../img/logo/logo_horizontal_blanco.png"></a>
        </div>
      </div>


  </div>
</nav>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="{{route('showDatosPersonales')}}">Datos Personales</a></li>
    <li><a href="{{route('showPacientes')}}">Pacientes</a></li>
    <li><a href="{{route('showHistoriaClinica')}}">Historia Clinica</a></li>
    <li><a href="{{route('showConsuta')}}">Consultas</a></li>
    <li><a href="{{route('showCalendario')}}">Citas</a></li>
    <li><a href="{{route('logout')}}">Cerrar sesión</a></li>
  </ul>
@yield('principal')
@section ('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{{ asset('js/init.js') }}}"></script>
  @yield('more_script')
@endsection

@endsection
