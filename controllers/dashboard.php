<?php  
  $title = "HOME";
  function get_content() {
  
?>
<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Number of Visitor', 'Number Accepted', 'Number Decline'],
          ['JAN', 70, 45, 25],
          ['FEB', 31, 23, 8],
          ['MAR', 89, 56, 33],
          ['APR', 12, 11, 1],
          ['MAY', 23, 20, 3],
          ['JUN', 56, 54, 2]
        ]);

        var options = {
          chart: {
            title: 'COVID-19 Health Declaration Form',
            subtitle: 'Number of Visitor',
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          colors: ['#ab5902', '#ffaa4f', '#ffddb8']
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

    </script>
</head>
<body>
    
    <div class="container-fluid" style="height:100%;">
         <div class="col-md-6 mx-auto">
             <div class="card mt-5 mb-5 ">
                 <div class="card-header">
                     <h3 class="text4 text-center">COVID-19 Health Declaration Form Data</h3>
                 </div>
                 <div class="card-body">
                     <div id="barchart_material" style="width: 700px; height: 350px;"></div>
                 </div>
             </div>
         </div>
     </div> 
     <a href="chart.php" class="btn btn-default btn3d mt-5 mb-5 mx-auto" style="border: 1px solid white; background-color: #172236; color: white;">SUBMIT</a>
</body>
</html>
    
<?php  
  }
  require_once '../views/partials/layout.php';
?>



   


    