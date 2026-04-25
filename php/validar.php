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
