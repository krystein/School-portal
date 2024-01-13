<?php


// Check if the student ID is provided in the request
if (isset($_GET['student_id'])) {
    require_once("class-autoload.inc.php");
    $studentId = $_GET['student_id'];

    // Create a StudentController
    $studentController = new StudentController(new Student(''));

    // Check if the student exists before attempting deletion
    if ($studentController->studentExists($studentId)) {
        // Delete the student
        $result = $studentController->removeStudent($studentId);

        // Display result or redirect to another page
        echo $result;
    } else {
        echo "Student not found.";
    }
} else {
    echo "Invalid request. Please provide a student ID.";
}
?>
