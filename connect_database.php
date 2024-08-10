<?php
//Database connection parameters
$servername ="localhost";
$username = "root";     //Default username for XAMPP
$password = "";         //Default password for XAMPP
$db_name = "grading_system";

//Attempting to establish a connection with MySQL database
$conn = mysqli_connect($servername, $username, $password, $db_name);

//Checking if connection is successful
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error()); //provides generic details about connection failed & stops script
}
?>