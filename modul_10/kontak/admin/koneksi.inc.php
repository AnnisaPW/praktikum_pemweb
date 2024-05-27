<?php
$host = "localhost";  // Change this to the correct hostname or IP address
$username = "root";  // Your database username
$password = "chaca020603";  // Your database password
$database = "ANNISA";  // Your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
