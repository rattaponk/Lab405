<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- responsive meta tag -->
    <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap-4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
  </head>

  <body class="login">
    <div class="container container-login">
      <div class="block-img-login">
        <img src="img/avatar3.png" alt="login">
        <!-- <img src="img/avatar3.png" alt="login" class="img-circle"> -->
        <!-- <img src="img/avatar3.png" alt="login" class="img-rounded"> -->
      </div>

      <form action="saveLogin.php" method="POST" name="myFormLogin" id="myFormLogin">
        <div class="form-group has-feedback">
          <label for="exampleInputEmail1">Email address Or Username</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required=true>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group has-feedback">
          <label for="exampleInputPassword1">Password</label>
          <input name="passWord" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required=true>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Check me out
          </label>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary"> Submit </button>
          <button type="reset" class="btn btn-danger"> Reset </button>
        </div>
      </form>
    </div>

    <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="lib/popper/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-validator/validator.min.js"></script>
    <script type="text/javascript" src="script/script.js?<?php echo rand(0,999); ?>"></script>
  </body>
</html>
