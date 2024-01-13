<?php
class StudentController extends Student {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addStudent($data) {
        return $this->model->createStudent($data);
    }

    public function removeStudent($studentId) {
        return $this->model->deleteStudent($studentId);
    }
    public function studentExists($studentId) {
        return $this->model->studentExisting($studentId);
    }
    
}




?>
