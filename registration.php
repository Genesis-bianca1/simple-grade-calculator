<?php
include('connect_database.php');

$student_id = $_POST['student_id'];
$forename = $_POST['forename'];
$surname = $_POST['surname'];
$password = $_POST['password'];

//Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
//Prepared statments to securely save data
$query = "INSERT INTO Student (student_id, forename, surname, passcode) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssss", $student_id, $forename, $surname, $hashed_password);

if($stmt->execute()) {
    header("Location:index.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>