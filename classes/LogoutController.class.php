<?php
class LogoutController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function logoutUser() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
}


