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
          <form class="form-horizontal" method="post" name="myForm" id="myForm" action="saveForm.php" onSubmit="return checkForm(this)" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-sm-3 col-sm-offset-1 control-label"> productName 1 </label>
              <div class="col-sm-6">
                <input type="text" name="product1" class="form-control" id="product1">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 col-sm-offset-1 control-label"> productName 2 </label>
              <div class="col-sm-6">
                <input type="text" name="product2" class="form-control" id="product2">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 col-sm-offset-1 control-label"> productName 3 </label>
              <div class="col-sm-6">
                <input type="text" name="product3" class="form-control" id="product3">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 col-sm-offset-1 control-label"> productName 4 </label>
              <div class="col-sm-6">
                <input type="text" name="product4" class="form-control" id="product4">
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
                <button type="submit" class="btn btn-success"> ส่ง </button>
                <button type="reset" class="btn btn-danger"> ล้าง </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- <form method="post" name="myForm"  action="saveFile.php" onSubmit="return checkForm(this)" enctype="multipart/form-data">
        productName 1 : <input type="text" name="product1" id="product1"><br>
        productName 2 : <input type="text" name="product2" id="product2"><br>
        productName 3 : <input type="text" name="product3" id="product3"><br>
        productName 4 : <input type="text" name="product4" id="product4"><br>
        productName 5 : <input type="text" name="product5" id="product5"><br>
        productName 6 : <input type="text" name="product6" id="product6"><br>
        productName 7 : <input type="text" name="product7" id="product7"><br>
        <input type="file" name="myFile" id="myFile"><br>
        <button type="submit"> ส่ง </button>
        <button type="reset"> ล้าง </button>
      </form> -->
    </div>

    <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="lib/popper/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/script.js?<?php echo rand(0,999); ?>"></script>
  </body>
</html>

<script>
  function checkForm(){
		if(document.getElementById("product1").value==""){
			alert("Please fill data");
			document.getElementById("product1").focus();
			return false;
		}else if(document.getElementById("product2").value==""){
			alert("Please fill data");
			document.getElementById("product2").focus();
			return false;
		}else
			return true;
  }

  function saveForm(){
  	myForm.submit();
  }
</script>
