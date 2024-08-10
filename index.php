<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Student Login</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="login-container">
            <h2>Student Login</h2>
            <form action="login.php" method="POST">
                <label for="student_id">Student ID:</label>
                <!--'required' html form validation for user ID-->
                <input type="text" id="student_id" name="student_id" oninput="validate_student_id(this)" required>
                <label for="password">Password:</label>
                <!--'required' html form validation for password-->
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>

<!--input validation-->
<script src="login_val.js"></script>