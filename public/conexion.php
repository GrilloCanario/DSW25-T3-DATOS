<?php
use Dotenv\Dotenv;

// Leer variables de entono

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$host = $_ENV['DB_HOST'];
//$host = '127.0.0.1';
$db = $_ENV['DB_NAME'];
//$db = 'tabla';
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
//$password = '1234';
$charset = $_ENV['DB_CHARSET'];

// Hacer la conexión a la BD. 
// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

} catch (PDOException $e) {
    echo "<h1>Error en la conexión</h1>";
    printf("<p>%s</p>", $e->getMessage());
    die();
}