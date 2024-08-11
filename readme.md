To understand the login, open files in the following order:

    connect_database.php
    login.php
    logout.php
    index.php
    login_val.js
    module_credits.php
    enter_marks.php
    validation.js
    process_marks.php
    marks_results.php



The 'grading_system' database schema in 3NF:

Table ‘Student’:
student_id (PK), forename, surname,  passcode, repeated_passcode, course_code (FK).

Table ‘Module’:
course_code (FK), module_code (PK), module_name, credits.

Table ‘Marks’:
student_id (PK), module_code (FK), mark, grade.

Table ‘GPA’:
student_id (FK), average_mark.

Table ‘Course’:
course_code(PK), course_name.

Table ‘Classification’:
student_id (FK), award (FK), classification.

Table ‘Award’:
award (PK), total_credits, course_code(FK).


Functions of the system:
1. Login
2. Redirect to enter grades table page
3. Enter grades of students' registered modules
4. Upon pressing 'Calculate' button:
       Mark is translated into grades
       Award based on degree criteria is revealed
5. Results above are displayed on a new page as a 'Results' table.
