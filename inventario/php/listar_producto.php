<?php
session_start();
include_once '../../conexion/conexion.php';

$consulta=$pdo->query("SELECT * FROM tbl_inventario");
$fila = $consulta->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($fila);
return;
?>
