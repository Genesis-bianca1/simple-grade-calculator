<?php
session_start();
include 'navigation.php';

//If user is not logged in, redirect to login page
if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Enter Marks</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!-- Marks container and form handler to input and POST module code, marks and credits-->
        <div class="marks-container">
            <h2> Enter Marks</h2>
            <form action="process_marks.php" method="POST" onsubmit="return validateMarks()">
                
                <!--Input fields for module marks
                HTML 'required' form validation-->
                <label for="comp7001">COMP7001 Object-Oriented Programming:</label>
                <input type="number" id="comp7001" name="comp7001" min="0" max="100" required>
                <label for="comp7002">COMP7002 Modern Computer Systems:</label>
                <input type="number" id="comp7002" name="comp7002" min="0" max="100" required>
                <label for="tech7005">TECH7005 Research, Scholarship and Professional Skills:</label>
                <input type="number" id="tech7005" name="tech7005" min="0" max="100" required>
                <label for="dalt7002">DALT7002 Data Science Foundations:</label>
                <input type="number" id="dalt7002" name="dalt7002" min="0" max="100" required>
                <label for="dalt7011">DALT7011 Introduction to Machine Learning:</label>
                <input type="number" id="dalt7011" name="dalt7011" min="0" max="100" required>
                <label for="soft7003">SOFT7003 Advanced Software Development:</label>
                <input type="number" id="soft7003" name="soft7003" min="0" max="100" required>
                <label for="tech7004">TECH7004 Cyber Security and the Web:</label>
                <input type="number" id="tech7004" name="tech7004" min="0" max="100" required>
                <label for="tech7009">TECH7009 MSc Dissertation in Computing Subjects:</label>
                <input type="number" id="tech7009" name="tech7009" min="0" max="100" required>
                
                <!--Submit records to calculate results-->
                <button type="submit">Submit Marks</button>
            </form>
        </div>
    </body>
</html>

<!--JS login input validation-->
<script src="validation.js"></script>