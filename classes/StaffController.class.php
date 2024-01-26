<?php

class StaffController extends Staff {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function addStaff($data) {
        return $this->model->createStaff($data);
    }

    public function removeStaff($staffId) {
        return $this->model->deleteStaff($staffId);
    }
    public function staffExists($staffId) {
        return $this->model->staffExisting($staffId);
    }
}


