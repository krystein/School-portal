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
            'matriculation_number' => $_POST['matriculation_number'],
            'father_name' => $_POST['father_name'],
            'mother_name' => $_POST['mother_name']
        );

        // Handle file upload
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../image/" . $filename;

        if (move_uploaded_file($tempname, $folder)) {
            // Image uploaded successfully
            $formData['image'] = $filename;

            $studentController = new StudentController(new User());
            $result = $studentController->addStudent($formData);

            // Display result or redirect to another page
            header('location: ../index.php');
        } else {
            // Failed to upload image
            echo "<h3>Failed to upload image!</h3>";
        }
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
