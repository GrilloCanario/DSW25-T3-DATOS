<?php
require_once "vendor/autoload.php";
require_once 'public/conexion.php';

try {
    $sql = file_get_contents('sql/create_table_post.sql');
    $pdo->exec($sql);

    echo "Tabla creada con éxito";
} catch (Exception $e){
    die("Error en la configuración: " . $e->getMessage());
}