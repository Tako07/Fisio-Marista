var ctx = document.getElementById('chart1');
var ctx2 = document.getElementById('chart2');
var ctx3 = document.getElementById('chart3');
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

var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Masculino', 'Femenino'],
        datasets: [{
            label: 'Genero',
            data: [154, 180],
            backgroundColor: [
              'rgba(255, 206, 86, 1)',
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

var myChart3 = new Chart(ctx3, {
    type: 'radar',
    data: {
        labels: ['Hombro', 'Muñeca', 'Espalda', 'Rodilla', 'Codo'],
        datasets: [{
            label: 'Lesiones',
            data: [40, 10, 34, 4, 34],
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
