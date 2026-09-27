<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "discuss";

// Create connection
$conn = new mysqli('localhost','root','','discuss');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>