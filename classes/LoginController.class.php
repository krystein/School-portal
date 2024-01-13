<?php
class LoginController extends User{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function authenticateUser($email, $password) {
        // Authenticate user based on provided credentials
        $user = $this->model->getUser($email);

        $userData = $user->fetch(PDO::FETCH_ASSOC);

        if ($userData && md5($password)== $userData['password']) {
            // Start a session and store user details
            session_start();
            $_SESSION['name'] = $userData['name'];
            $_SESSION['email'] = $userData['email'];

            return true; // Authentication successful
        } else {
            return false; // Authentication failed
        }
    }
}
?>
