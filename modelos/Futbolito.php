<?php
require_once __DIR__ . '/../config/conex.php';

class Futbolito {
    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function getAll() {
        $sql = "SELECT * FROM futbolito";
        $result = $this->mysqli->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
