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
            'marital_status' => $_POST['marital_status'],
            'sex' => $_POST['sex'],
            'state_of_origin' => $_POST['state_of_origin'],
            'address' => $_POST['address'],
            'position' => $_POST['position'],
            'password' => $_POST['password'],
            // Add more fields as needed
        );

        $staffController = new StaffController(new Staff());
        $result = $staffController->addStaff($formData);

        header("location: ../");
    } else {
        header("location: ../index.php?error=invalid!");
    }
    
}

// Function to perform server-side validation
function validateFormData($data) {
    $errors = array();

    if (empty($data['name'])) {
        $errors[] = 'Name is required.';
    }
    return $errors;
}
?>
