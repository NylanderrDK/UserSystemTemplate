<?php
// Database credentials
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "9500Hobro";
$dbName     = "example_usersystem";

// Connect to database
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

// Check connection
if(!$conn) {
    die('Connection failed: '.mysqli_connect_error());
} else {
    echo 'Connected';
}