<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- responsive meta tag -->
    <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap-4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-table/bootstrap-table.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
  </head>

  <body>
    <div class="container container-form">
      <div class="panel panel-primary">
        <div class="panel-heading"> Table </div>
        <div class="panel-body">
          <input type="text" class="form-control search" placeholder="คำค้นหา" style="margin-bottom: 20px;">

          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th data-align="center" data-valign="middle" data-field="id"> ลำดับ </th>
                <th data-align="center" data-valign="middle" data-field="firstName"> ชื่อ </th>
                <th data-align="center" data-valign="middle" data-field="lastName"> นามสกุล </th>
                <th data-align="center" data-valign="middle" data-field="action"></th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="lib/popper/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table.js"></script>
    <script type="text/javascript" src="script/scriptTable.js?<?php echo rand(0,999); ?>"></script>
  </body>
</html>
