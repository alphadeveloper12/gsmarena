<?php
$servername = "localhost";
$username = "username";
$password = "";


// Create connection
$conn = new mysqli("localhost", "root", "password", "my_demo");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>