<?php
require_once __DIR__ . '/../config/db.php';
header('Content-Type: application/json');

// Simulamos un pequeño retardo para apreciar la carga "moderna"
// usleep(500000); 

$stmt = $pdo->query("SELECT * FROM albums");
$albums = $stmt->fetchAll();

echo json_encode($albums);
