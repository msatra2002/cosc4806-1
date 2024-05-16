<?php
// Start output buffering to prevent any premature output
ob_start();

// Start the session
session_start();

// Check if session is started
if (session_status() == PHP_SESSION_ACTIVE) {
    echo "Session is active.";
} else {
    echo "Session is not active.";
}

// Destroy the session
session_destroy();

// Check if session is destroyed
if (session_status() == PHP_SESSION_NONE) {
    echo "Session is destroyed.";
} else {
    echo "Session is still active.";
}

// Redirect to login.php
header('Location: /login.php');
exit();

// End output buffering and send output
ob_end_flush();
?>