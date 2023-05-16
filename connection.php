<?php
function openCon() {
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "testloker";
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName) or die("Connect failed " . $conn->error );
    return $conn;
}
