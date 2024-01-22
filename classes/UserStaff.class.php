<?php
class User extends Database{
    protected $conn;

    public function getStaffs($email) {

        $query = "SELECT * FROM staff WHERE email = '$email'";
        $result = $this->connect()->query($query);

        return $result;
    }
}
?>