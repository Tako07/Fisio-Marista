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
      <h2 style="font-size: 3vw;" id="tituloCita">AGENDAR CITA</h2>
    </div>
    <div class="modalB-body">
        
    <form method="POST">
    @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="input-field col s12">
                    @php
                    $numCitas = 1;
                    foreach($citas as $cita){
                        $numCitas = $numCitas+1;
                    }
                    @endphp
                    <input value="{{$numCitas}}" disabled id="inputIdCita" name="inputIdCita" type="text" class="validate">
                    <label for="inputFechaCita">ID</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="input-field col s12">
                    <input value="1" disabled id="inputFechaCita" name="inputFechaCita" type="text" class="validate">
                    <label for="inputFechaCita">Fecha de la cita</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="input-field col s12">
                    <textarea id="inputDescripcion" name="inputDescripcion" class="materialize-textarea" data-length="120"></textarea>
                    <label for="inputDescripcion">Descripcion Breve</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="input-field col s12">
                    <input id="inputHoraCita" name="inputHoraCita" type="text" class="validate">
                    <label for="inputHoraCita">Hora de la cita</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="col s12">
                    <label>Paciente</label>
                        <select class="browser-default" id="inputCurpPaciente" name="inputCurp">
                            <option value="" disabled selected>Selecciona un paciente...</option>
                            @foreach($pacientes as $paciente)
                                <option value="{{$paciente->curp}}">{{$paciente->nombres}} {{$paciente->apaterno}} {{$paciente->amaterno}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="col s12">
                    <label for="inputColor">Color</label>
                    <input id="inputColor" name="inputColor" type="color" class="validate">
                </div>
            </div>
        </div>
    </form>

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
    var NuevoEvento;
    $("#btnAgregar").click(function(){
        EnviarInfo();
    });

    $("#btnEliminar").click(function(){
        BajaCita();
    });

    function EnviarInfo(){
        var token = "{{ csrf_token() }}";
        $.ajax({
            type:"post",
            url:"{{route('registrarCita')}}",
            data:{inputDescripcion:$("#inputDescripcion").val(),
                inputCurpPaciente:$("#inputCurpPaciente").val(),
                inputFechaCita:$("#inputFechaCita").val(),
                inputHoraCita:$("#inputHoraCita").val(),
                inputColor:$("#inputColor").val(),
                inputIdUsuario:{{session('id_usuario')}},
                _token:token},
            success:function(){
                $("#CalendarioWeb").fullCalendar('renderEvent',{
                    id:$("#inputIdCita").val(),
                    title:'Cita de: '+$("#inputCurpPaciente").val(),
                    descripcion:$("#inputDescripcion").val(),
                    start:$("#inputFechaCita").val()+" "+$("#inputHoraCita").val(),
                    end:$("#inputFechaCita").val()+" "+$("#inputHoraCita").val(),
                    color:$("#inputColor").val()
                });
                $("#modalNuevaCita").css("display","none");
                @php
                    $numCitas = 1;
                    foreach($citas as $cita){
                        $numCitas = $numCitas+1;
                    }
                @endphp
                document.getElementById("inputIdCita").value = {{$numCitas+1}};
                document.getElementById("inputDescripcion").value = '';
                document.getElementById("inputHoraCita").value = '';
            }
        });
    }

    function BajaCita(){
        var token = "{{ csrf_token() }}";
        $.ajax({
            type:"post",
            url:"{{route('bajaCita', ['id' => 1])}}",
            data:{inputIdCita:$("#inputIdCita").val(),
                _token:token},
            success:function(){
                $("#CalendarioWeb").fullCalendar('removeEvents', $("#inputIdCita").val());
                $("#modalNuevaCita").css("display","none");
                @php
                    $numCitas = 1;
                    foreach($citas as $cita){
                        $numCitas = $numCitas+1;
                    }
                @endphp
                document.getElementById("inputIdCita").value = {{$numCitas+1}};
                document.getElementById("inputDescripcion").value = '';
                document.getElementById("inputHoraCita").value = '';
            }
        });
    }

    $(document).ready(function () {
        @php
            $numCitas = 1;
            foreach($citas as $cita){
                $numCitas = $numCitas+1;
            }
        @endphp
        document.getElementById("inputDescripcion").value = '';
        document.getElementById("inputHoraCita").value = '';
        document.getElementById("inputIdCita").value = {{$numCitas+1}};
        $('#CalendarioWeb').fullCalendar({
            header: {
                left: 'month,agendaWeek,agendaDay',
                center: 'title',
                right: 'today,prev,next, btnNuevaCita'
            },
            dayClick:function(date,jsEvent,view){
                $('#inputFechaCita').val(date.format());
                $("#modalNuevaCita").css("display","block");
            },
            events:[
            @foreach($citas as $cita)
                {
                    @if ($cita->estado == 'ACTIVA')
                        id: '{{$cita->id}}',
                        title:'{{$cita->curp_paciente}}',
                        descripcion: '{{$cita->descripcion}}',
                        start: '{{$cita->fecha_cita}} {{$cita->hora_cita}}',
                        color:'{{$cita->color}}',
                        nombres:'{{ $cita->nombres }}'
                    @endif
                },
            @endforeach
            ],
            eventClick:function(callEvent,jsEvent,view){

                $("#tituloCita").html(callEvent.title);

                $("#inputIdCita").val(callEvent.id);
                $("#inputDescripcion").val(callEvent.descripcion);
                $("#inputColor").val(callEvent.color);
                $("#inputCurpPaciente").val(callEvent.title);
                console.log(callEvent.nombres);

                FechaHora= callEvent.start._i.split(" ");
                $("#inputFechaCita").val(FechaHora[0]);
                $("#inputHoraCita").val(FechaHora[1]);

                $("#modalNuevaCita").css("display","block");

            }
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