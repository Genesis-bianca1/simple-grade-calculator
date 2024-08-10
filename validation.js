function validateMarks() {
    const marks = document.querySelectorAll('input[type="number"]');
    for (let mark of marks) {
        if (mark.value < 0 || mark.value > 100) {
            alert("Marks should be betweebn 0 and 100");
            return false;
        }
    }
    return true;
}