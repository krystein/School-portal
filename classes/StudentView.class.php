<?php
class StudentView extends Student
{
    private $Student = array();

    public function showStudent()
    {
        $result = $this->getStudent();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->Student[] = $row;
        }

        return $this->Student;
    }
}

?>