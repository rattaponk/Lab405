<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> .:: Hello! ::. </title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css?<?php echo rand(0,999); ?>">
  </head>

  <body>
    <div class"container">
      <label>Hello World!</label>
      <p>I want to be friendly.</p>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </body>
  <script type="text/javascript" src="bootstrap-3.3.7/css/bootstrap.min.css"></script>
</html>
