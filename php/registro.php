<?php
session_start();
include_once '../conexion/conexion.php';


$cedula=$_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['telefono'];
$nick = $_POST['nick'];
$clave = $_POST['clave'];

$estado=1;


$consulta = $pdo->query("SELECT COUNT(id_user) AS total FROM tbl_usuario");
$fila = $consulta->fetch();
$contador = $fila['total'] + 1;
$codigo = "USER-0000" . $contador;


$inserta = $pdo->query("INSERT INTO tbl_persona 
(ce_persona, no_persona, ap_persona, mo_persona) 
VALUES ('$cedula', '$nombre', '$apellido', '$celular')");



$inserta = $pdo->query("INSERT INTO tbl_usuario 
(id_user, ce_user, ni_user, cl_user, es_user) 
VALUES ('$codigo', '$cedula', '$nick', '$clave', '$estado')");


if($inserta){
echo json_encode([
        "success" => true,
        "mensaje" => "Usuario registardo correctamente"
    ]);
}else{
echo json_encode([
        "success" => true,
        "mensaje" => "No se registro"
    ]);

}



