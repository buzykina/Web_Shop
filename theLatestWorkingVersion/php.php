<?php

$servername = "studmysql01.fhict.local";
$username = "dbi392854";
$password = "1234";
$database = "dbi392854";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>