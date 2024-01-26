<?php
class Student extends Database{
    protected $conn;

    protected function getStudent()
    {
        return $this->connect()->query("SELECT * FROM  students");
    }
    
    public function createStudent($data) {

        $query = "INSERT INTO students (name, email, date_of_birth, phone_number, password, marital_status, sex, state_of_origin, address, level, matriculation_number, father_name, mother_name, image)
                  VALUES (:name, :email, :date_of_birth, :phone_number, :password, :marital_status, :sex, :state_of_origin, :address, :level, :matriculation_number, :father_name, :mother_name, :image)";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute($data);

        if ($stmt->rowCount() > 0) {
            return "Student created successfully!";
        } else {
            header("location: ../index.php?error=stmt failed!");
            exit();
           
        }
    }

    public function deleteStudent($studentId) {
        $query = "DELETE FROM students WHERE student_id = :student_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $studentId);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Student deleted successfully!";
        } else {
            return "Error deleting student.";
        }
    }
    public function studentExisting($studentId) {
        $query = "SELECT COUNT(*) FROM students WHERE student_id = :student_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $studentId, PDO::PARAM_INT);
        $stmt->execute();

        $count = $stmt->fetchColumn();
        return ($count > 0);
    }


}



