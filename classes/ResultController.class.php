<?php

class ResultController extends User {
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function addResult1($data)
    {
        return $this->model->createResult1($data);
    }
    public function addResult2($data)
    {
        return $this->model->createResult2($data);
    }
}
