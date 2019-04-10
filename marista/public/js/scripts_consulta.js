google.load('visualization','1.0', {'packages':['corechart']});
google.setOnLoadCallback(dibujar); //Funcion despues de cargar el api de google
    
    function dibujar(){
        var data =new google.visualization.DataTable();
        data.addColumn('string', 'Ciudad'); //Añadir columnas
        data.addColumn('number', 'Visitas');
        data.addRows(
            [
                ['Enero', 700],
                ['Febrero', 651],
                ['Marzo',552],
                ['Abril',100]
            ]
        );
        var opciones = {'title':'Visitas de Pacientes', 'width':500, 'height':300};
        var grafica = new google.visualization.AreaChart(document.getElementById('charts'));
        grafica.draw(data, opciones);
        
    }