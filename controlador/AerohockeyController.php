<?php
require_once __DIR__ . '/../modelos/Aerohockey.php';

class AerohockeyController {
    private $model;

    public function __construct($mysqli) {
        $this->model = new Aerohockey($mysqli);
    }

    public function displayAll() {
        return $this->model->getAll();
    }
}
