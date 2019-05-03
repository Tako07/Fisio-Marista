@extends('layouts.navBar')
@section('more_style')
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
<link href="{{{ asset('css/style_consultas.css') }}}" rel="stylesheet">
<script>
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
        datasets: [{
            label: 'Enero',
            data: [101, 62, 75, 110, 115],
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)'
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
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

<div class="section container">
<div class="row section container">
  <div class="contenedor col s12 m6 push-m3">
    <h5>Cantidad de pacientes</h5>
  </div>
</div>
<canvas id="chart1" width="400" height="200"></canvas>
<div class="row section container">
  <div class="contenedor col s12 m6 push-m3">
    <h5>Genero</h5>
  </div>
</div>
<canvas id="chart2" width="400" height="200"></canvas>
<div class="row section container">
  <div class="contenedor col s12 m6 push-m3">
    <h5>Lesiones más comunes</h5>
  </div>
</div>
<canvas id="chart3" width="400" height="200"></canvas>
</div>
    <div  class="btn-group fadeIn first" role="group" aria-label="Basic example">
            <button type="button" name="tipo" class="btn btn-primary">Imprimir</button>
            <button type="button" name="tipo" class="btn btn-primary">Descargar Base de Datos</button>
            <button type="button" name="tipo" class="btn btn-primary">Reporte</button>
    </div>


@endsection
@section('more_script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
  <script type="text/javascript" src="{{{ asset('js/estadisticas/test.js') }}}"></script>
@endsection
