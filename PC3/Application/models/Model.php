<?php
    $servername = "localhost";
    $username = "enekatestream";
    $password = "enekatestream33";
    $dbname = "enekatestream";

    $pdo = new mysqli( $servername, $username, $password, $dbname);
    if($pdo->connect_error) {
        die("Connection Failed" . $pdo->connect_error);
    }