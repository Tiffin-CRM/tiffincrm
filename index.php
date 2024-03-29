<?php
// Check if the 'token' cookie is set
if(isset($_COOKIE['token'])) { // isset() checks if a variable is set and is not NULL
    header("Location: user.php"); // Redirect to user.php
    exit; // Stop further execution
} else {
    header("Location: login.php"); // Redirect to login.php
    exit; // Stop further execution
}
?>
