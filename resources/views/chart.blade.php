@extends('tela-em-comum')
@section('comum')

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        //GRAFICO 1
        var data = google.visualization.arrayToDataTable([
          ['Sexo', 'Total'],
          ['masculino',   {{$pastel}}],
          ['feminino',    {{$pastel2}}],
         
        ]);

        var options = {
          title: '  Sexo Eleitores'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);


        //GRAFICO 2
        var data2 = google.visualization.arrayToDataTable([
          ['Estado Civil', 'Total'],
          ['casado',   {{$pastel3}}],
          ['solteiro',    {{$pastel4}}],
          ['viuvo',   {{$pastel5}}],
          ['divorciado',    {{$pastel6}}]
         
        ]);

        var options2 = {
          title: 'Estado Civil Eleitores'
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart2.draw(data2, options2);
      }
      
      
    </script>
    
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    
    <div id="piechart2" style="width: 900px; height: 500px;"></div>
  </body>
</html>


@endsection