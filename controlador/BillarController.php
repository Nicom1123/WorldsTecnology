<?php
require_once __DIR__ . '/../modelos/Billar.php';

class BillarController {
    private $model;

    public function __construct($mysqli) {
        $this->model = new Billar($mysqli);
    }

    public function displayAll() {
        return $this->model->getAll();
    }
}
