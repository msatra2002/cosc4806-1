<?php
// Start output buffering to prevent any premature output
ob_start();

session_start();

// Check if user is authenticated
if (isset($_SESSION['username'])) {
    // User is logged in
    echo "You are logged in as " . $_SESSION['username'];
} else {
    // User is not logged in, redirect to login.php
    header('Location: /login.php');
    exit();
}

// End output buffering and send output
ob_end_flush();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mohamed</title>
</head>
<body>

<h1>Assignment 1</h1>

<p> Welcome, <?= $_SESSION['username'] ?></p>

</body>
<footer> 
    <p><a href="/logout.php"> Click here to log out </a></p>
</footer>
</html>