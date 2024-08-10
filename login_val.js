//JS input validation

//Setting student id criteria (numeric value only)
function validate_student_id(input) {
    var regrex = /^\d+$/; 
    //Check regrex pattern match
    if (!regrex.test(input.value)) {
        alert('The username is your 8-digit Student ID');
        input.value = '';
        input.focus();
    }
}

//Validate form inputs for register and login fields
function validateForm() {
    var student_id_input = document.getElementById('student_id');
    validate_student_id(student_id_input);
    return true;
}

//Event handler to trigger an alert as soon as the basic web structure is ready
document.addEventListener('DOMContentLoaded', function () {
    var student_id_input = document.querySelector('input[name="student_id"]');
    if (student_id_input) {
        student_id_input.addEventListener('input', function () {
            validate_student_id(student_id_input);
        });
    }

});

