<?php

class Staff extends Database {
    protected $conn;

    protected function getStaff()
{
    return $this->connect()->query("SELECT * FROM  staff");
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
}



