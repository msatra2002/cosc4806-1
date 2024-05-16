<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

<h1>Login Form</h1>

<?php
if (isset($_SESSION['failed_attempts']) && $_SESSION['failed_attempts'] > 0) {
    echo '<p class="error">Unsuccessful attempt number: ' . $_SESSION['failed_attempts'] . '</p>';
}
?>

<form action="/validate.php" method="post">  
    <label for="username">Username:</label>
    <br>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <br>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>





