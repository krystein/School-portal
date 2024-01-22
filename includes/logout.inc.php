<?php
require_once("class-autoload.inc.php");

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $userModel = new User();
    $logoutController = new LogoutController($userModel);
    $logoutController->logoutUser();
}



?>
