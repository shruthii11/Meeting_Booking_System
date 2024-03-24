<?php
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Change this if you're using a different MySQL username
$password = ""; // Change this if you've set a password for your MySQL server
$database = "room_booking"; // Change this if your database name is different

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


