<?php
class User extends Database{
    protected $conn;

    public function getStudent($email) {

        $query = "SELECT * FROM students WHERE email = '$email'";
        $result = $this->connect()->query($query);

        return $result;
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
    public function getStaffs($email) {

        $query = "SELECT * FROM staff WHERE email = '$email'";
        $result = $this->connect()->query($query);

        return $result;
    }

    public function createStaff($data) {
        $query = "INSERT INTO staff (name, email, date_of_birth, phone_number, password, marital_status, sex, state_of_origin, address, position, image)
                  VALUES (:name, :email, :date_of_birth, :phone_number, :password, :marital_status, :sex, :state_of_origin, :address, :position, :image)";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute($data);

        if ($stmt->rowCount() > 0) {
            return "Staff member created successfully!";
        } else {
            return "Error creating staff member.";
        }
    }
    public function deleteStaff($staffId) {
        $query = "DELETE FROM staff WHERE staff_id = :staff_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':staff_id', $staffId);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Staff member deleted successfully!";
        } else {
            return "Error deleting staff member.";
        }
    }
    
    public function staffExisting($staffId) {
        $query = "SELECT COUNT(*) FROM staff WHERE staff_id = :staff_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':staff_id', $staffId, PDO::PARAM_INT);
        $stmt->execute();

        $count = $stmt->fetchColumn();

        return ($count > 0);
    }

    protected function getResult()
    {
        return $this->connect()->query("SELECT * FROM result1");
    }

    public function createResult1($data)
    {


        $query = "INSERT INTO result1 (matriculation_number, ges100, ges102, mth110, mth120, phy101, phy102, chm130, eng101)
                      VALUES (:matriculation_number, :ges100, :ges102, :mth110, :mth120, :phy101, :phy102, :chm130, :eng101)";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute($data);

        if ($stmt->rowCount() > 0) {
            return "Result created successfully!";
        } else {
            return "Error creating result.";
        }
    }
    public function createResult2($data)
    {

        $query = "INSERT INTO result2 (matriculation_number, eng201, eng202, eng203, eng204, eng213, eng210, phy216)
                  VALUES (:matriculation_number, :eng201, :eng202, :eng203, :eng204, :eng213, :eng210, :phy216)";

        $stmt = $this->connect()->prepare($query);
        $stmt->execute($data);

        if ($stmt->rowCount() > 0) {
            return "Result created successfully!";
        } else {
            return "Error creating result.";
        }
    }
}
