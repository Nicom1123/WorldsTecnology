<?php
require_once __DIR__ . '/../controlador/IncidentesController.php';
session_start();

// Verificar sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php?action=login');
    exit();
}

$incidentesController = new IncidentesController($mysqli);
$incidentesData = $incidentesController->displayAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Incidentes</title>
</head>
<body>
<?php include 'components/side-bar.php'; ?>
<div class="container">
    <h1>Incidentes</h1>
    <div class="container-table">
        <?php include 'components/incidentes-table.php'; ?>
    </div>
</div>
</body>
</html>
