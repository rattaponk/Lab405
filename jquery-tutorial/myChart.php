<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Chart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- responsive meta tag -->
    <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap-4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
  </head>

  <body>
    <div class="container container-form">
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading"> Pie Chart </div>
          <div class="panel-body">
            <canvas id="pieChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading"> Bar Chart </div>
          <div class="panel-body">
            <canvas id="barChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="lib/popper/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/chartJs/Chart.min.js"></script>
    <script type="text/javascript" src="script/config.js?<?php echo rand(0,999); ?>"></script>
    <script type="text/javascript" src="script/scriptChart.js?<?php echo rand(0,999); ?>"></script>
  </body>
</html>
