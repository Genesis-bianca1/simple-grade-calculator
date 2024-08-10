<?php
session_start();
include 'connect_database.php';
include 'navigation.php';

$student_id = $_SESSION['student_id'];

//To get marks and derive grades
$query = "SELECT * FROM Marks WHERE student_id='$student_id'";
$result = mysqli_query($conn, $query);

//Accummulates grade count as a list
$marks = [];
$grades_count = ['A' => [], 'B' => [], 'C' => [], 'F' =>[]];
while ($row = mysqli_fetch_assoc($result)) {
    $marks[$row['module_code']] = $row['mark'];
    $grades_count[$row['grade']][] = $row['module_name'];
}

//Calculate average mark
$total_marks = array_sum($marks);
$average_mark = $total_marks / count($marks);

//Determine classification based on average marks
$class = '';
if ($average_mark >= 70) {
    $class = 'DISTINCTION';
} elseif ($average_mark >= 60) {
    $class = 'MERIT';
} elseif ($average_mark >= 50) {
    $class = 'PASS';
} else {
    $class = 'FAIL';
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Results</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="results-container">
            <h2> Results</h2>
            <p> Average Mark: <?php echo $average_mark; ?></p>
            <p> Classification: <?php echo $class; ?></p>
            <p> Award: <?php echo $award; ?></p>
            <h2>Grade Count</h3>
            <ul>
                <li><strong>A:</strong> <?php echo count($grades_count['A']); ?></li>
                <li><strong>B:</strong> <?php echo count($grades_count['B']); ?></li>
                <li><strong>C:</strong> <?php echo count($grades_count['C']); ?></li>
                <li><strong>F:</strong> <?php echo count($grades_count['F']); ?></li>
            </ul>
        </div>
    </body>
</html>