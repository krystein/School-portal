<?php
require_once("class-autoload.inc.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validate form data (perform server-side validation)
    $errors = validateFormData($_POST);

    if (empty($errors)) {
        // Collect form data
        $formData = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'date_of_birth' => $_POST['date_of_birth'],
            'phone_number' => $_POST['phone_number'],
            'password' => md5($_POST['password']),
            'marital_status' => $_POST['marital_status'],
            'sex' => $_POST['sex'],
            'state_of_origin' => $_POST['state_of_origin'],
            'address' => $_POST['address'],
            'level' => $_POST['level'],
            'options' => $_POST['options'],
            'father_name' => $_POST['father_name'],
            'mother_name' => $_POST['mother_name'],
        );

        $studentController = new StudentController(new Student());
        $result = $studentController->addStudent($formData);

        // Display result or redirect to another page
        echo $result;

    } else {
        // Display validation errors
        echo implode('<br>', $errors);
    }
}

// Function to perform server-side validation
function validateFormData($data) {
    $errors = array();

    // Example: Validate that the name is not empty
    if (empty($data['name'])) {
        $errors[] = 'Name is required.';
    }

    // Add more validation rules as needed

    return $errors;
}
?>
