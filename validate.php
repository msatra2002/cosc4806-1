<?php

  $valid_username = "mohamed";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if($valid_username == $username && $valid_password == $password) {
    echo "success";
  } else {
    echo "failed";
  }



?>