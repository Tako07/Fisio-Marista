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
          <img id="img_logo" class="resposive-img" src="../img/logo/logo_horizontal_blanco.png">
        </div>
      </div>


  </div>
</nav>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
@yield('principal')
@section ('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{{ asset('js/init.js') }}}"></script>
  @yield('more_script')
@endsection

@endsection
