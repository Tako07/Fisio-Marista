@extends('layouts.navBar')
@section('more_style')
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
<link href="{{{ asset('css/style_consultas.css') }}}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
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
    <h5>Cantidad de usuarios</h5>
  </div>
</div>
<canvas id="chart2" width="400" height="200"></canvas>


</div>
    <div  class="btn-group fadeIn first" role="group" aria-label="Basic example">
            <a href="{{route('descargaDB')}}" type="button" name="tipo" class="btn btn-primary">Descargar Información general de pacientes</a>
    </div>




@endsection

@section('more_script')
<script type="text/javascript">
var ctx = document.getElementById('chart1');
var ctx2 = document.getElementById('chart2');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Cantidad de pacientes'],
        datasets: [{
            label: 'Total',
            data: [{{$cantidad}}],
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
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

var myChart2 = new Chart(ctx2, {
    type: 'horizontalBar',
    data: {
        labels: ['Cantidad de usuarios'],
        datasets: [{
            label: 'Usuarios',
            data: [{{$usuarios}}],
            backgroundColor: [
              'rgba(255, 206, 86, 1)',
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
