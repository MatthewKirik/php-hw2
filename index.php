<?php

session_start(['cookie_httponly' => true, 'cookie_secure' => true]);

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Index</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
    <div class='index-container'>
        <h2>Welcome to the index page!</h2>
        <form action='logout.php' method='post'>
            <input type='submit' name='logout' value='Logout' class='btn btn-primary'>
        </form>
    </div>
</body>
</html>";

?>
