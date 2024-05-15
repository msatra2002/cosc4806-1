<?php

  session_start();

  $valid_username = "mohamed";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];

  if($valid_username == $username && $valid_password == $password) {
    $_SESSION['auhtenticated'] = 1;
    header ('location: /');
  } else {
    
    if(!isset($_SESSION['failed_attempts'])) {
      $_SESSION['failed_attempts'] = 1;
    } else {
      $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }

    //header... redirect to login.php
    echo "This is unsuccessfull attempt number: " . $_SESSION['failed_attempts'];
    
}

?>