<?php
session_start();
include 'connect_database.php';

//Obtain user's login credentials from the POST request
$student_id = $_POST['student_id'];
$password = $_POST['password'];

//Secure the input to prevent SQL injection
$student_id = mysqli_real_escape_string($conn, $student_id);

//SQL query to fetch the stored password from database
$query = "SELECT * FROM Student WHERE student_id='$student_id' AND passcode='$password'";
//Result of executed statement
$result = mysqli_query($conn, $query);

//Check if record is found
if(mysqli_num_rows($result) == 1) {
    //Set session var with the student_id & redirect to enter_marks.php only when $result true
    $_SESSION['student_id'] = $student_id;
       header("Location: enter_marks.php");
} else {
    echo "Invalid student ID or password";
}

?>