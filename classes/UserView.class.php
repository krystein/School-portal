<?php
class UserView extends User
{
    private $user;
    private $staffs;

    public function showUser($email)
    {
        $result = $this->getUser($email); // Assuming you have a getUser() method in your User class

        // Fetch the user details for the specified user ID
        $this->user = $result->fetch(PDO::FETCH_ASSOC);

        return $this->user;

    }
    public function showStaff($email)
    {
        $result = $this->getStaffs($email); // Assuming you have a getUser() method in your User class

        // Fetch the user details for the specified user ID
        $this->staffs = $result->fetch(PDO::FETCH_ASSOC);

        return $this->staffs;

    }
}
?>
