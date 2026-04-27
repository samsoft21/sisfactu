<?php
session_start();
$host = "localhost";
$db   = "bdd_sisfactu";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:
host=$host;
dbname=$db;
charset=utf8", 
$user, $pass
);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo " Conexión exitosa <br>";
} catch(PDOException $e) {
    die(" Error de conexión: " . $e->getMessage());
}
$consulta=$pdo->query("SELECT * FROM tbl_persona");
$fila = $consulta->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($fila);
return;
?>
