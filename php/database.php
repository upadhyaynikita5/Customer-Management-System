<?php
    header('Access-Control-Allow-Origin: *');
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "coffee";

    $db_connection = new mysqli($host, $user, $password, $database);

    if ($db_connection -> connect_errno) {
        die("Failed to connect to MySQL: " .$db_connection -> connect_error);
    }

    echo "<script>console.log('Database is running')</script>";
?>