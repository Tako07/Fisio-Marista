@extends('layouts.navBar')
@section('title,Calendario')
@section('principal')

    <link rel="stylesheet" href= "{{{asset('css/fullcalendar.min.css')}}}">
    <link rel="stylesheet" href="{{{ asset('css/estiloInicio.css') }}}">
    <script src="css/bootstrap4.3.1/js/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap4.3.1/css/bootstrap-clockpicker.css">

    <div class="container">
        <br>
        <div class="form-row">
            <div class="col-lg-12">
                <div id="CalendarioWeb"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>

<!-- MODAL PARA ACTUALIZAR -->
    <div id="modalActualizaCita" class="modalB">
        <!-- Modal content -->
        <div class="modalB-content">
            <div class="modalB-header">
                <span class="closeB" style="font-size: 3vw;" id="closeActualizaCita">&times;</span>
                <h3 style="font-size: 3vw;" id="tituloCitaAct"></h3>
            </div>
            <div class="modalB-body">
                <form method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-field col s12">
                                @php
                                    $numCitasAct = 1;
                                    foreach($citas as $cita){
                                        $numCitasAct = $numCitasAct+1;
                                    }
                                @endphp
                                <input value="{{$numCitasAct}}" disabled id="inputIdCitaAct" name="inputIdCitaAct" type="text" class="validate">
                                <label for="inputIdCitaAct">ID</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-field col s12">
                                <input value="1" disabled id="inputFechaCitaAct" name="inputFechaCitaAct" type="text" class="validate">
                                <label for="inputFechaCitaAct">Fecha de la cita</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="input-field col s12">
                                <textarea id="inputDescripcionAct" name="inputDescripcionAct" class="materialize-textarea" data-length="120"></textarea>
                                <label for="inputDescripcionAct">Descripcion Breve</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="input-group clockpicker" data-autoclose="true">
                                <div class="input-field col s12">
                                    <input id="inputHoraCitaAct" name="inputHoraCitaAct" type="text" value="9:30" class="validate">
                                    <label for="inputHoraCitaAct">Hora de la cita</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="col s12">
                                <label>Paciente</label>
                                <select class="browser-default" id="inputCurpPacienteAct" name="inputCurpPacienteAct">
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
                                <label for="inputColorAct">Color</label>
                                <input id="inputColorAct" name="inputColorAct" type="color" class="validate col-md-12">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modalB-footer">
                <button id="btnModificar" class="col-md-auto btn btn-lg" type="button" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Modificar</button>
                <button id="btnEliminar" class="col-md-auto btn btn-lg btn-danger" type="button" style="background-color:rgba(213,15,48, 1);color: #fff;line-height: 50%;">Eliminar</button>
                <button id="btnCancelar" class="col-md-auto btn btn-lg" type="button" style="background-color: rgba(255,183,0,0.8);color: #fff;line-height: 50%;" onclick="document.getElementById('modalActualizaCita').style.display = 'none';">Cancelar</button>
            </div>
            <br>
        </div>
    </div>

<!-- MODAL PARA NUEVA CITA -->
    <div id="modalNuevaCita" class="modalB">
        <!-- Modal content -->
        <div class="modalB-content">
            <div class="modalB-header">
                <span class="closeB" style="font-size: 3vw;" id="closeNuevaCita">&times;</span>
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
                                <label for="inputIdCita">ID</label>
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
                            <div class="input-group clockpicker" data-autoclose="true">
                                <div class="input-field col s12">
                                    <input id="inputHoraCita" name="inputHoraCita" type="text" value="9:30" class="validate">
                                    <label for="inputHoraCita">Hora de la cita</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="col s12">
                                <label>Paciente</label>
                                <select class="browser-default" id="inputCurpPaciente" name="inputCurp">
                                    <option disabled selected value="0">Selecciona un paciente...</option>
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
                                <input value="#003764" id="inputColor" name="inputColor" type="color" class="validate col-md-12">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modalB-footer">      
                <button id="btnAgregar" class="col-md-auto btn btn-lg" type="button" style="background-color:rgba(71,72,104, 1);color: #fff;line-height: 50%;">Agregar</button>
                <button id="btnCancelar" class="col-md-auto btn btn-lg" type="button" style="background-color: rgba(255,183,0,0.8);color: #fff;line-height: 50%;" onclick="document.getElementById('modalNuevaCita').style.display = 'none';">Cancelar</button>
            </div>
            <br>
        </div>
    </div>

@section('more_script')
    <script type="text/javascript">
        $('.clockpicker').clockpicker();
    </script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <script>
        var NuevoEvento;
        $("#btnAgregar").click(function(){
            AgregaCita();
        });

        $("#btnEliminar").click(function(){
            BajaCita();
        });

        $("#btnModificar").click(function(){
            ModificaCita();
        });

        function AgregaCita(){
            var token = "{{csrf_token()}}";
            var nombreComp = $( "#inputCurpPaciente option:selected" ).text();
            console.log(nombreComp);
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
                        title:nombreComp,
                        descripcion:$("#inputDescripcion").val(),
                        start:$("#inputFechaCita").val()+" "+$("#inputHoraCita").val(),
                        end:$("#inputFechaCita").val()+" "+$("#inputHoraCita").val(),
                        color:$("#inputColor").val(),
                    });
                    $("#modalNuevaCita").css("display","none");
                }
            });
        }

        function BajaCita(){
            var token = "{{ csrf_token() }}";
            $.ajax({
                type:"post",
                url:"{{route('modificaCita', ['id' => 1, 'MoB' => 'B'])}}",
                data:{inputIdCitaAct:$("#inputIdCitaAct").val(),
                    _token:token},
                success:function(){
                    $("#CalendarioWeb").fullCalendar('removeEvents', $("#inputIdCitaAct").val());
                    $("#modalActualizaCita").css("display","none");
                }
            });
        }

        function ModificaCita(){
            var token = "{{ csrf_token() }}";
            var id = $('#inputIdCitaAct').val();
            var nombreComp = $( "#inputCurpPacienteAct option:selected" ).text();
            $.ajax({
                type:"post",
                url:"{{route('modificaCita', ['id' => 1, 'MoB' => 'M'])}}",
                data:{inputIdCitaAct:$("#inputIdCitaAct").val(),
                    inputDescripcionAct:$("#inputDescripcionAct").val(),
                    inputCurpPacienteAct:$("#inputCurpPacienteAct").val(),
                    inputFechaCitaAct:$("#inputFechaCitaAct").val(),
                    inputHoraCitaAct:$("#inputHoraCitaAct").val(),
                    inputColorAct:$("#inputColorAct").val(),
                    inputIdUsuario:{{session('id_usuario')}},
                    _token:token},
                success:function(){
                    $("#CalendarioWeb").fullCalendar('removeEvents', $("#inputIdCitaAct").val());
                    $("#CalendarioWeb").fullCalendar('renderEvent',{
                        id:$("#inputIdCitaAct").val(),
                        title:nombreComp,
                        descripcion:$("#inputDescripcionAct").val(),
                        start:$("#inputFechaCitaAct").val()+" "+$("#inputHoraCitaAct").val(),
                        end:$("#inputFechaCitaAct").val()+" "+$("#inputHoraCitaAct").val(),
                        color:$("#inputColorAct").val(),
                        curp:$("#inputCurpPacienteAct").val()
                    });
                    $("#modalActualizaCita").css("display","none");
                }
            });
        }

        $(document).ready(function () {
            $('#CalendarioWeb').fullCalendar({
                header: {
                    left: 'month,agendaWeek,agendaDay',
                    center: 'title',
                    right: 'today,prev,next'
                },
                dayClick:function(date,jsEvent,view){
                    $('#inputFechaCita').val(date.format('YYYY-MM-DD'));
                    $("#modalNuevaCita").css("display","block");
                    @php
                        $numCitas = 1;
                        foreach($citas as $cita){
                            $numCitas = $numCitas+1;
                        }
                    @endphp
                    document.getElementById("inputIdCita").value = {{$numCitas}};
                    document.getElementById("inputDescripcion").value = '';
                    document.getElementById("inputHoraCita").value = '';
                    $("#inputCurpPaciente").val('0');
                    document.getElementById("inputHoraCita").focus();
                    document.getElementById("inputDescripcion").focus();
                },
                events:[
                    @foreach($citas as $cita){
                        @if ($cita->estado == 'ACTIVA')
                            id: '{{$cita->id}}',
                            title:'{{$cita->nombres}} {{$cita->apaterno}} {{$cita->amaterno}}',
                            descripcion: '{{$cita->descripcion}}',
                            start: '{{$cita->fecha_cita}} {{$cita->hora_cita}}',
                            end: '{{$cita->fecha_cita}} {{$cita->hora_cita}}',
                            color:'{{$cita->color}}',
                            curp: '{{$cita->curp_paciente}}'
                        @endif
                    },
                @endforeach
                ],
                eventClick:function(callEvent,jsEvent,view){
                    $("#inputIdCitaAct").val(callEvent.id);
                    $("#inputDescripcionAct").val(callEvent.descripcion);
                    $("#inputColorAct").val(callEvent.color);
                    $("#inputCurpPacienteAct").val(callEvent.curp);

                    FechaHora= callEvent.start.format().split("T");
                    $("#inputFechaCitaAct").val(FechaHora[0]);
                    $("#inputHoraCitaAct").val(FechaHora[1]);
                    @if(isset($cita->curp_paciente))
                        document.getElementById("tituloCitaAct").innerHTML='Cita de '+'{{$cita->nombres}} {{$cita->apaterno}} {{$cita->amaterno}} ({{$cita->curp_paciente}})';
                    @endif

                    $("#modalActualizaCita").css("display","block");
                    document.getElementById("inputHoraCitaAct").focus();
                    document.getElementById("inputDescripcionAct").focus();
                },
                editable:true,
                eventDrop:function(callEvent){
                    $("#inputIdCitaAct").val(callEvent.id);
                    $("#inputDescripcionAct").val(callEvent.descripcion);
                    $("#inputColorAct").val(callEvent.color);
                    $("#inputCurpPacienteAct").val(callEvent.curp);

                    FechaHora= callEvent.start.format().split("T");
                    $("#inputFechaCitaAct").val(FechaHora[0]);
                    $("#inputHoraCitaAct").val(FechaHora[1]);
                    ModificaCita();
                }
            });
            // Get the modals
            var modal = document.getElementById('modalNuevaCita');
            var modalAct = document.getElementById('modalActualizaCita');
            // Get the <span> element that closes the modal
            var span = document.getElementById("closeNuevaCita");
            var spanAct = document.getElementById("closeActualizaCita");
            span.onclick = function() {modal.style.display = "none";}
            spanAct.onclick = function() {modalAct.style.display = "none";}
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {if (event.target == modal) modal.style.display = "none";if (event.target == modalAct) modalAct.style.display = "none";}
        });
    </script>
@endsection

@endsection