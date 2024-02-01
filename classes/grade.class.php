<?php
require_once("database.class.php");
class Grade extends Database
{
    protected $conn;

    public function getResult()
    {
        session_start();
        $loggedInEmail = $_SESSION['email'];

        $sqlMatNo = "SELECT matriculation_number FROM students WHERE email = '$loggedInEmail'";
        $resultMatNo = $this->connect()->query($sqlMatNo);

        if ($resultMatNo->rowCount() > 0) {
            $userRow = $resultMatNo->fetch(PDO::FETCH_ASSOC);
            $mat_no = $userRow['matriculation_number'];

            $query = "SELECT * FROM result1 WHERE matriculation_number = '$mat_no'";
            $result = $this->connect()->query($query);

            if ($result->rowCount() > 0) {
                $data = $result->fetch(PDO::FETCH_ASSOC);

                header('Content-Type: application/json');
                echo json_encode($data);
            } else {
                echo "No results found for the logged-in user";
            }
        } else {
            echo "No mat_no found for the logged-in user";
        }
    }
}
try {
    // Create an instance of the Grade class and call the getResult method
    $grade = new Grade();
    $grade->getResult();
} catch (Exception $e) {
    // Output any exceptions for debugging
    echo "Exception: " . $e->getMessage();
}

