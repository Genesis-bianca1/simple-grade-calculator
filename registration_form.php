<?php
session_start();
include('connect_database.php');
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
        <!--Includes register handle code-->
        <section class="register_form">
            <h1>Register</h1><br>
            <form action="registration.php" method="POST" onsubmit="return validateForm()">
                <label for="student_id">Username</label>
                <!--Store registration details on input-->
                <input type="text" id="student_id" name="student_id" placeholder="This should be your student ID" required><br>
                <label for="forename">Forename</label>
                <input type="text" id="forename" name="forename" required><br>
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" required><br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Up to 20 characters long (include special characters and numbers)" required>
                <button type="submit" name="submit" >Create Account</button>
            </form>
        </section>
    </body>
</html>

<script src="login_val.js"</script>