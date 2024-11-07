<?php
require_once __DIR__ . '/../modelos/Futbolito.php';

class FutbolitoController {
    private $model;

    public function __construct($mysqli) {
        $this->model = new Futbolito($mysqli);
    }

    public function displayAll() {
        return $this->model->getAll();
    }
}
