@extends('layouts.app')
@section('stylesheet')
<link href="{{{ asset('css/style_navbar.css') }}}" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


@endsection
@section('title','Barra de navegación')

@section('content')


<div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action ">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action ">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action ">Overview</a>
        <a href="#" class="list-group-item list-group-item-action ">Events</a>
        <a href="#" class="list-group-item list-group-item-action ">Profile</a>
        <a href="#" class="list-group-item list-group-item-action ">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav id="barra" class="navbar navbar-expand-lg navbar-light bg-light">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button class="btn btn-primary" id="menu-toggle">
            <a href="#" id="menu_on">
  	          <span></span>
  	          <span></span>
  	          <span></span>
            </a>
          </button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="iconoNavbar">
            <img src="{{{ asset('img/logo/logo_horizontal_blanco.png') }}}" id="icon" alt="User Icon" />
          </div>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Cerrar sesión</a>
            </li>


          </ul>
        </div>
      </nav>


    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>



@endsection
