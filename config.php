<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "im102_week3_lopecillo";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>