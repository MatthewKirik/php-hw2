<?php

function db_conn_open() {
    $hostname = getenv('HW2_MYSQL_HOSTNAME');
    $username = getenv('HW2_MYSQL_USERNAME');
    $password = getenv('HW2_MYSQL_PASSWORD');
    $database = getenv('HW2_MYSQL_SCHEMA');

    $db_conn = mysqli_connect($hostname, $username, $password, $database);
    if ($db_conn->connect_error) {
        echo "Cannot connect to the database.";
        exit;
    }

    return $db_conn;
}

function db_conn_close($connection) {
    if (!mysqli_close($connection)) {
        echo "Failure on closing connection to the database.";
        exit;
    }
}

?>
