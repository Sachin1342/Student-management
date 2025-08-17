<?php
$servername = "localhost";
$username = "root";   // change if needed
$password = "";       // change if you set MySQL password
$dbname = "students";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}
?>
