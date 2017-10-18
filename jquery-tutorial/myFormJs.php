<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- responsive meta tag -->
    <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap-4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
  </head>

  <body>
    <div class="container container-form">
      <div class="panel panel-primary">
        <div class="panel-heading"> ทดสอบฟอร์ม </div>
        <div class="panel-body">
          <form class="form-horizontal" method="post" name="myForm" id="myForm">
            <div id="place_element">
              <div class="form-group product has-feedback">
                <label class="col-sm-3 col-sm-offset-1 control-label"> productName 1 </label>
                <div class="col-sm-6">
                  <input type="text" name="product1" class="form-control valProduct" id="product1" required=true>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-sm btn-danger deleteElement" data-toggle="tooltip" data-placement="top" title="ลบ"><span class="glyphicon glyphicon-remove"></span></button>
                </div>
              </div>

              <div class="form-group product has-feedback">
                <label class="col-sm-3 col-sm-offset-1 control-label"> productName 2 </label>
                <div class="col-sm-6">
                  <input type="text" name="product2" class="form-control valProduct" id="product2" required=true>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-sm btn-danger deleteElement" data-toggle="tooltip" data-placement="top" title="ลบ"><span class="glyphicon glyphicon-remove"></span></button>
                </div>
              </div>

              <div class="form-group product has-feedback">
                <label class="col-sm-3 col-sm-offset-1 control-label"> productName 3 </label>
                <div class="col-sm-6">
                  <input type="text" name="product3" class="form-control valProduct" id="product3" required=true>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-sm btn-danger deleteElement" data-toggle="tooltip" data-placement="top" title="ลบ"><span class="glyphicon glyphicon-remove"></span></button>
                </div>
              </div>

              <div class="form-group product has-feedback">
                <label class="col-sm-3 col-sm-offset-1 control-label"> productName 4 </label>
                <div class="col-sm-6">
                  <input type="text" name="product4" class="form-control valProduct" id="product4" required=true>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-sm btn-danger deleteElement" data-toggle="tooltip" data-placement="top" title="ลบ"><span class="glyphicon glyphicon-remove"></span></button>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 col-sm-offset-1 control-label"> File </label>
              <div class="col-sm-6">
                <input type="file" name="myFile" class="form-control" id="myFile">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-4">
                <button type="button" class="btn btn-info" id="createRow"><span class="glyphicon glyphicon-plus"></span> เพิ่ม </button>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" class="btn btn-success"> ส่ง </button>
                <button type="reset" class="btn btn-danger"> ล้าง </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="lib/popper/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-validator/validator.min.js"></script>
    <script type="text/javascript" src="script/script.js?<?php echo rand(0,999); ?>"></script>
  </body>
</html>
