<?php
require_once("class-autoload.inc.php");

// Process login form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $userModel = new User();
    $loginController = new LoginController($userModel);

    if ($loginController->authenticateUser($username, $password)) {
        header('Location: ../profile.php'); // Redirect to the dashboard after successful login
        exit();
    } else {
        echo $username;
        echo $password;
    }
}

