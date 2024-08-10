<nav >
    <ul>
        <?php
        //Reveal different menu options based on user login status
        if (isset($_SESSION['student_id'])) {
        echo "<li><a href='enter_marks.php'><strong>Marks Calculator</strong></a></li>";
        echo "<li><a href='marks_results.php'><strong>Results Table</strong></a></li>";
        echo "<li><a href='logout.php'><strong>Log Out</strong></a></li>";
        }
        ?>
        </ul>
</nav>