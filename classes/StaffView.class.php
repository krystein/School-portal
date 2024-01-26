<?php
class StaffView extends Staff
{
    private $Staff = array();

    public function showStaff()
    {
        $result = $this->getStaff();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->Staff[] = $row;
        }

        return $this->Staff;
    }
}

