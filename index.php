<?php
// Start a session to keep track of the user's login status
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedin'])) {
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Index</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <div class='container'>
            <h2>Welcome to the index page!</h2>
        </div>
    </body>
    </html>";
} else {
    // If the user is not logged in, redirect to the login page
    header('Location: login.php');
    exit;
}
?>
