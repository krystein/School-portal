<?php
require_once("class-autoload.inc.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form data (perform server-side validation)
    $errors = validateFormData($_POST);

    if (empty($errors)) {
        // Collect form data
        $formData = array(
            'matriculation_number' => $_POST['matriculation_number'],
            'ges100' => $_POST['ges100'],
            'ges102' => $_POST['ges102'],
            'mth110' => $_POST['mth110'],
            'mth120' => $_POST['mth120'],
            'phy101' => $_POST['phy101'],
            'phy102' => $_POST['phy102'],
            'chm130' => $_POST['chm130'],
            'eng101' => $_POST['eng101'],
        );
         
            $resultController = new ResultController(new Result());
            $result = $resultController->addResult1($formData);

                header("Location: ../staffResult.php?upload-successful");
                exit();
          
    } else if (empty($errors)) {
        // Collect form data
        $formData = array(
            'matriculation_number' => $_POST['matriculation_number'],
            'eng201' => $_POST['eng201'],
            'eng202' => $_POST['eng202'],
            'eng203' => $_POST['eng203'],
            'eng204' => $_POST['eng204'],
            'eng213' => $_POST['eng213'],
            'eng210' => $_POST['eng210'],
            'phy216' => $_POST['phy216'],
        );
         
            $resultController = new ResultController(new Result());
            $result = $resultController->addResult2($formData);

                header("Location: ../staffResult.php?upload-successful");
                exit();
          } else {

        echo implode('<br>', $errors);
    }
}

// Function to perform server-side validation
function validateFormData($data)
{
    $errors = array();

    if (empty($data['matriculation_number'])) {
        $errors[] = 'Matriculation number is required.';
    }
    // Add more validation checks for other fields if needed

    return $errors;
}
