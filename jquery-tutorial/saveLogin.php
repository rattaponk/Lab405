<?php
  $email = $_POST['email'];
  $passWord = $_POST['passWord'];

  if($email && $passWord)
    header('Location: myForm.php');
  else
    header('Location: login.php');
?>
