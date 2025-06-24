<?php
// Database configuration
$host = 'localhost';
$db   = 'Biodiesel';
$user = 'root'; // Change this to your MySQL username
$pass = '';     // Change this to your MySQL password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
// Connection successful
// ... you can now use $conn in your app 