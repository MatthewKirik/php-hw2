<?php

require 'db_lib.php';
require "msg_lib.php";

session_start(['cookie_httponly' => true, 'cookie_secure' => true]);

if (isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}

// check if the login button was clicked
if (isset($_POST['login'])) {
    $conn = db_conn_open();
    // escape the username to protect from SQL injections
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $pass_query = "SELECT password_hash FROM users WHERE username='$username'";
    $pass_query_result = mysqli_query($conn, $pass_query);
    $password_hash = mysqli_fetch_column($pass_query_result);

    // check if the password matches the hash saved in the database
    if (password_verify($password, $password_hash)) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
        // Success('Logged in successfully!');
    } else {
        // Error('Invalid username or password.');
    }

    db_conn_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" name='login' value="Login" class="btn btn-primary">
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</body>
</html>
