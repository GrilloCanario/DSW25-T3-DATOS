<?php

use Dsw\Blog\Database;

require_once '../vendorautoload.php';

try {
    $conn = Database::getConnection();
} catch (Exception $e){
    die('Error de conexión con BD: ' . $e->getMessage());
}

$id = 2;
