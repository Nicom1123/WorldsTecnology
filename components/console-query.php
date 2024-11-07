<?php
$sql = "SELECT * FROM consolas";
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['estudiante'] . "</td>";
        echo "<td>" . $row['juego'] . "</td>";
        echo "<td>" . $row['tiempo restante'] . "</td>";
        echo "<td>";
        include 'components/buttons.php';
        echo "</td>";
        echo "</tr>";
    }
}
?>
