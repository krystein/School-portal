<?php

class Result extends Database
{
    protected $conn;

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
