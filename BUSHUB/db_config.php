<?php
$servername = "localhost";
$username = "root";
$password = "Vidyad@1905";
$dbname = "bushub"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
