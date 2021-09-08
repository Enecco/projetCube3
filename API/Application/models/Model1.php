<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "enekatestream";

    $pdo = new mysqli( $servername, $username, $password, $dbname);
    if($pdo->connect_error) {
        die("Connection Failed" . $pdo->connect_error);
    }