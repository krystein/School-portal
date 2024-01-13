<?php

// Check if the staff ID is provided in the request
if (isset($_GET['staff_id'])) {
    require_once("class-autoload.inc.php");
    $staffId = $_GET['staff_id'];

    // Create a StaffController
    $staffController = new StaffController(new Staff($conn));

    // Check if the staff member exists before attempting deletion
    if ($staffController->staffExists($staffId)) {
        // Delete the staff member
        $result = $staffController->removeStaff($staffId);

        // Display result or redirect to another page
        echo $result;
    } else {
        echo "Staff member not found.";
    }
} else {
    echo "Invalid request. Please provide a staff ID.";
}
?>

