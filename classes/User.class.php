<?php
class User extends Database{
    protected $conn;

    public function getUser($email) {

        $query = "SELECT * FROM students WHERE email = '$email'";
        $result = $this->connect()->query($query);

        return $result;
    }
    public function getStaffs($email) {

        $query = "SELECT * FROM staff WHERE email = '$email'";
        $result = $this->connect()->query($query);

        return $result;
    }
}
?>
