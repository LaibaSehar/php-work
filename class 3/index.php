<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="todolist";

// Create connection
$conn = new mysqli($servername, $username, $password,$todolist);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


