<?php
require_once __DIR__ . '/../config/conex.php';

class Incidentes {
    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    // Obtener todos los incidentes
    public function getAll() {
        $sql = "SELECT * FROM Incidentes";
        $result = $this->mysqli->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Agregar un nuevo incidente
    public function addIncidente($estudiante, $descripcion, $fecha) {
        $sql = "INSERT INTO Incidentes (estudiante, descripcion, fecha) VALUES (?, ?, ?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("sss", $estudiante, $descripcion, $fecha);
        return $stmt->execute();
    }
}