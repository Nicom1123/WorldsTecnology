<?php
require_once __DIR__ . '/../modelos/Console.php';

class ConsoleController {
    private $consoleModel;

    public function __construct($mysqli) {
        $this->consoleModel = new Console($mysqli);
    }

    public function index() {
        return $this->consoleModel->getAll();
    }
}
