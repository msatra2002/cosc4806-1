<?php
session_start();

// Check if user is authenticate
// if NOT, send them to login.php ... header()...
if (isset($_SESSION['username'])) {
    // User is logged in
    echo "You are logged in as " . $_SESSION['username'];
} else {
    // User is not logged in
    echo "You are not logged in";

}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mohamed</title>
  </head>
  
  <body>
  
    <h1>Assignment 1</h1>

    <p> Welcome, <?=$_SESSION['username'] ?></p>

  
  </body>

  <footer> 
    <p><a href="/logout.php"> Click here to log out </a></p>

  </footer>
</html>

