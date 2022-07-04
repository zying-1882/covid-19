<?php  
  $title = "HOME";
  function get_content() {
  
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country/State', 'Visitor'],
          ['Malaysia', 20],
          ['China', 90],
          ['England', 40],
          ['Thailand', 50],
          ['Itali', 45],
          ['Jermen', 36]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
	<div class="container-fluid" style="height:100%;">
         <div class="col-md-6 mx-auto">
             <div class="card mt-5 mb-5 ">
                 <div class="card-header">
                     <h3 class="text4 text-center">COVID-19 Visitor State/Country Data</h3>
                 </div>
                 <div class="card-body">
                     <div id="regions_div" style="width: 700px; height: 350px;"></div>
                 </div>
             </div>
         </div>
     </div> 
</body>
</html>
<?php  
  }
  require_once '../views/partials/layout.php';
?>