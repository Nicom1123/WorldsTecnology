<?php
require_once __DIR__ . '/../models/Billar.php';
$billar = new Billar($mysqli);
$records = $billar->getAll();

foreach ($records as $index => $record) {
    echo "<tr>";
    echo "<td>" . ($index + 1) . "</td>";
    echo "<td>" . htmlspecialchars($record['estudiante']) . "</td>";
    echo "<td>" . htmlspecialchars($record['tiempo_restante']) . " minutos</td>";
    echo "<td>";
    include 'components/buttons.php';
    echo "</td>";
    echo "</tr>";
}
?>
