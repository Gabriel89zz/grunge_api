<?php
$host = 'localhost';
$db   = 'grunge_db';
$user = 'gabriel_admin'; // Cambia por tu usuario de MariaDB
$pass = 'Grunge2026!'; // Cambia por tu contraseña
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     header('Content-Type: application/json');
     echo json_encode(["error" => "Error de conexión"]);
     exit;
}
