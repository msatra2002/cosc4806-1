<?php
// Start output buffering
ob_start();

session_start();

$valid_username = "mohamed";
$valid_password = "password";

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password) {
    $_SESSION['authenticated'] = 1;
    header('Location: /');
    exit();
} else {
    if (!isset($_SESSION['failed_attempts'])) {
        $_SESSION['failed_attempts'] = 1;
    } else {
        $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }

    // Redirect to login.php
   header('Location: /login.php');
   exit();
}

// End output buffering and flush the buffer
ob_end_flush();
?>