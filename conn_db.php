<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "foodcave";
$port= "3308";

// Attempt to establish a connection to the MySQL database
$mysqli = new mysqli($host, $username, $password, $database, $port);

// Check if the connection was successful
if ($mysqli->connect_errno) {
    header("Location: db_error.php");
    exit(1); // Terminate script execution after redirect
}

// Define constant for site root directory
define('SITE_ROOT', realpath(dirname(__FILE__)));

// Set the default timezone
date_default_timezone_set('Asia/Kolkata');
?>
