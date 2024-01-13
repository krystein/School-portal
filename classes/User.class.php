<?php
class User extends Database{
    protected $conn;

    public function getUser($email) {
        // Retrieve user details from the database
        $query = "SELECT * FROM students WHERE email = '$email'";
        $result = $this->connect()->query($query);

        return $result;
    }
}
?>
