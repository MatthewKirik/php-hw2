<?php

require "db_lib.php";
require "msg_lib.php";

session_start(['cookie_httponly' => true, 'cookie_secure' => true]);

// check if the register button was clicked
if (isset($_POST['register'])) {
    $conn = db_conn_open();
    // escape the username to protect from SQL injections
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    // check if the user already exists
    $user_exists_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_exists_query);
    $user = mysqli_fetch_assoc($result);
    session_commit();

    if (!$user) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, password_hash)
            VALUES('$username', '$password_hash')";
        mysqli_query($conn, $query);
        display_success('Registration successful');
    } else {
        display_error('The user with such username already exists');
    }

    db_conn_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <input type="submit" name="register" value="Register" class="btn btn-primary">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
