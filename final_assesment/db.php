<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "student_name";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error)
    die("Connetion failed: " . $conn->connect_error);
?>