<?php

session_start(['cookie_httponly' => true, 'cookie_secure' => true]);

// clearing all session variables and redirecting to login page
unset($_SESSION['username']);
unset($_SESSION['loggedin']);
session_commit();
header('Location: login.php');
exit;

?>
