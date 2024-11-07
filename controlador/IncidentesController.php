<?php
require_once __DIR__ . '/../modelos/Incidentes.php';

class IncidentesController {
    private $model;

    public function __construct($mysqli) {
        $this->model = new Incidentes($mysqli);
    }

    public function displayAll() {
        return $this->model->getAll();
    }

    public function reportIncidente($estudiante, $descripcion, $fecha) {
        return $this->model->addIncidente($estudiante, $descripcion, $fecha);
    }
}
