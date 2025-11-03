<?php
//- Pagina de prueba. Se debe eliminar de producción:
use Dotenv\Dotenv;

require_once '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

echo "<pre>";
print_r($_ENV);
echo "</pre>";
printf('<p>Base de datos: %s</p>', $_ENV['DB_NAME']);