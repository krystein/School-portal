<?php
class UserView extends User
{
    private $staffs;

    public function showStaff($email)
    {
        $result = $this->getStaffs($email); // Assuming you have a getUser() method in your User class

        // Fetch the user details for the specified user ID
        $this->staffs = $result->fetch(PDO::FETCH_ASSOC);

        return $this->staffs;

    }
}
?>