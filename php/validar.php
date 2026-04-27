<?php
session_start();
include_once './conexion/conexion.php';


$nick=$_POST['nomb'];
$clav = $_POST['clave'];


$consulta=$pdo->query("SELECT * from tbl_usuario where ni_user='$nick' and cl_user='$clav'");
if($consulta->rowCount()){
        $_SESSION['3520046b263473a59e2fdb917026df5f8396e08a']='true';
        $_SESSION['usuario']=$nick;
echo json_encode([
        "success" => true,
        "mensaje" => "Bienvenido  acceso correcto"
    ]);
}else{
echo json_encode([
        "success" => true,
        "mensaje" => "Usuario no permitido"
    ]);

}


?>
