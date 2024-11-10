<?php
require_once __DIR__ . '/../modelos/Futbolito.php';
$futbolito = new Futbolito($mysqli);
$records = $futbolito->getAll();

foreach ($records as $index => $record) {
    echo "<tr>";
    echo "<td>" . ($index + 1) . "</td>";
    echo "<td>" . htmlspecialchars($record['estudiante']) . "</td>";
    echo "<td>" . htmlspecialchars($record['tiempo_restante']) . " minutos</td>";
    echo "<td>";
    include 'buttons.php';
    echo "</td>";
    echo "</tr>";
}
?>
