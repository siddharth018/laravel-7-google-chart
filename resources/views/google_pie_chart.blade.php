<!DOCTYPE html>
<html>
 <head>
  <title>Laravel 8 Google Chart</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  
  <script type="text/javascript">
   var analytics = <?php echo $gender; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Percentage of Male and Female Employee'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Percentage of Male and Female Employee</h3>
   <div class="panel panel-default">
    <div class="panel-body" align="center">
     <div id="pie_chart" style="width:750px; height:450px;">
     </div>
    </div>
   </div>
   
  </div>
 </body>
</html>