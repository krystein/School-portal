<?php
class UserView extends User
{
    private $student;
    private $staff;

    public function showStudent($email)
    {
        $result = $this->getStudent($email);

        $this->student = $result->fetch(PDO::FETCH_ASSOC);

        return $this->student;

    }
    public function showStaff($email)
    {
        $result = $this->getStaffs($email);

        $this->staff = $result->fetch(PDO::FETCH_ASSOC);

        return $this->staff;

    }
    
}

