@extends('layouts.navBar')
@section('title,Calendario')
@section('principal')

    <link rel="stylesheet" href= "{{{asset('css/fullcalendar.min.css')}}}">
    <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">

    <div class="container">
        <br>
        <div class="form-row">
            <div class="col-lg-12">
                <div id="CalendarioWeb"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- The Modal -->
<div id="modalNuevaCita" class="modalB">

  <!-- Modal content -->
  <div class="modalB-content">
    <div class="modalB-header">
      <span class="closeB" style="font-size: 3vw;">&times;</span>
      <h2 style="font-size: 3vw;">AGENDAR CITA</h2>
    </div>
    <div class="modalB-body">
        ...
    </div>
    <div class="modalB-footer">
      
      <button id="btnAgregar" class="col-md-auto btn btn-lg" type="button" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Agregar</button>
      <button id="btnModificar" class="col-md-auto btn btn-lg" type="button" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Modificar</button>
      <button id="btnEliminar" class="col-md-auto btn btn-lg btn-danger" type="button" style="background-color:rgba(213,15,48, 1);color: #fff;line-height: 50%;">Eliminar</button>
      <button id="btnSubmit" class="col-md-auto btn btn-lg" type="button" style="background-color: rgba(255,183,0,0.8);color: #fff;line-height: 50%;" data-dismiss="modal">Cancelar</button>
    </div>
    <br>
  </div>
</div>
@section('more_script')

<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/es.js"></script>

<script>
    $(document).ready(function () {
        $('#CalendarioWeb').fullCalendar({
            header: {
                left: 'month,agendaWeek,agendaDay',
                center: 'title',
                right: 'today,prev,next, btnNuevaCita'
            },
            customButtons:{
                btnNuevaCita:{
                    text:"Nueva Cita",
                    click:function(){}
                }
            },
            dayClick:function(date,jsEvent,view){
                $("#modalNuevaCita").css("display","block");
            },
            events:[
            @foreach($citas as $cita)
                {
                    id: {{$cita->id}},
                    title:'Cita de: {{$cita->curp_paciente}}',
                    descripcion: '{{$cita->descripcion}}',
                    start: '{{$cita->fecha_hora_cita}}',
                    color:'{{$cita->color}}'
                }
            @endforeach
            ]
        });
        // Get the modal
        var modal = document.getElementById('modalNuevaCita');
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closeB")[0];
        span.onclick = function() {modal.style.display = "none";}
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {if (event.target == modal) modal.style.display = "none";}
    });
</script>
@endsection

@endsection