@extends('layouts.navBar')
@section('more_style')
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
<link href="{{{ asset('css/style_consultas.css') }}}" rel="stylesheet">
<script src="js/scripts_consulta.js"></script>
@endsection

@section('script')

<!--<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load('visualization','1.0', {'packages':['corechart']});
    google.setOnLoadCallback(dibujar); //Funcion despues de cargar el api de google
    
    function dibujar(){
        var data =new google.visualization.DataTable();
        data.addColumn('string', 'Ciudad'); //Añadir columnas
        data.addColumn('number', 'Visitas');
        data.addRows(
            [
                ['Cd Mexico', 700],
                ['Bogota', 651],
                ['Los Angeles',552],
                ['Morelia',100]
            ]
        );
        var opciones = {'title':'Visitas de mi sitio web', 'width':500, 'height':300};
        var grafica = new google.visualization.AreaChart(document.getElementById('charts'));
        grafica.draw(data, opciones);
        
    }
     
</script>-->
@endsection


@section('title','Consultas')

@section('principal')
    
    <section class="seccion contenedor">
        <h2>Consultas </h2>
        <p>
            A continuacion se presentan las estadisticas generales de acuerdo a las categorias ya preestablecidas.
            Esta seccion esta destinada unicamente para el administrador
        </p>
    </section><!-- seccion estadisticas -->

    <div id="charts">
    <!--imagen de tabla-->
    </div>



    <section class="estadisticas contenedor seccion">
        <h2>Estadisticas</h2>
        <ul class="lista-estadisticas clearfix">
        <li>
            <div class="estadistica">
            <img src="img/grafica.jpg" alt="imagen estadistica 1">
            <p>Enfermedades</p>
            <div id="charts1"></div>
            </div>
        </li>
        <li>
            <div class="estadistica">
            <div id="charts1"></div>   
            <img src="img/grafica.jpg" alt="imagen estadistica 2">
            <p>Sexo</p>
            </div>
        </li>
        <li>
            <div class="estadistica">
            <div id="charts1"></div>
            <img src="img/grafica.jpg" alt="imagen estadistica 3">
            <p>Pacientes</p>
            </div>
        </li>
        <li>
            <div class="estadistica">
            <div id="charts1"></div>
            <img src="img/grafica2.jpg" alt="imagen estadistica 4">
            <p>Profesiones</p>
            </div>
        </li>
        <li>
            <div class="estadistica">
            <div id="charts1"></div>
            <img src="img/grafica2.jpg" alt="imagen estadistica">
            <p>Edades</p>
            </div>
        </li>
        <li>
            <div class="estadistica">
            <div id="charts1"></div>
            <img src="img/grafica2.jpg" alt="imagen estadistica 6">
            <p>Ubicacion del Dolor</p>
            </div>
        </li>
        </ul>
    </section>

    <!--<script src="{{{asset('js/scripts_consulta.js')}}}"></script>-->
    <!--<script src="{{{asset('js/init.js')}}}"></script>-->

    <div  class="btn-group fadeIn first" role="group" aria-label="Basic example">
            <button type="button" name="tipo" class="btn btn-primary">Imprimir</button>
            <button type="button" name="tipo" class="btn btn-primary">Descargar Base de Datos</button>
            <button type="button" name="tipo" class="btn btn-primary">Reporte</button>
    </div>
    

@endsection