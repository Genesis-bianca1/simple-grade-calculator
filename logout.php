<?php
session_start(); 

session_unset();   //Clears session variables
session_destroy(); //Destroy session data

header("Location: index.php"); //Redirect to login page
?>


