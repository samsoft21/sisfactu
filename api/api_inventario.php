<?php
header('Content-Type: application/json');

session_start();
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include_once '../conexion/conexion.php';

// Detectar método
$metodo = $_SERVER['REQUEST_METHOD'];

switch($metodo){

    // ===============================
    // LEER DATOS
    // ===============================
    case 'GET':

       
        $consulta=$pdo->query("SELECT * FROM tbl_inventario");
        $fila = $consulta->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($fila);
        break;


    // ===============================
    // GUARDAR DATOS
    // ===============================
    case 'POST':

        $data = json_decode(file_get_contents("php://input"), true);

        $sql = "INSERT INTO tbl_inventario(nombre,cantidad,precio)
                VALUES(:nombre,:cantidad,:precio)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':nombre'   => $data['nombre'],
            ':cantidad' => $data['cantidad'],
            ':precio'   => $data['precio']
        ]);

        echo json_encode([
            "status"=>"ok",
            "mensaje"=>"Guardado correctamente"
        ]);

        break;


    // ===============================
    // EDITAR DATOS
    // ===============================
    case 'PUT':

        $data = json_decode(file_get_contents("php://input"), true);

        $sql = "UPDATE tbl_inventario 
                SET nombre=:nombre,
                    cantidad=:cantidad,
                    precio=:precio
                WHERE id=:id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':nombre'   => $data['nombre'],
            ':cantidad' => $data['cantidad'],
            ':precio'   => $data['precio'],
            ':id'       => $data['id']
        ]);

        echo json_encode([
            "status"=>"ok",
            "mensaje"=>"Actualizado correctamente"
        ]);

        break;


    // ===============================
    // ELIMINAR DATOS
    // ===============================
    case 'DELETE':

        $data = json_decode(file_get_contents("php://input"), true);

        $sql = "DELETE FROM tbl_inventario WHERE id=:id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => $data['id']
        ]);

        echo json_encode([
            "status"=>"ok",
            "mensaje"=>"Eliminado correctamente"
        ]);

        break;

}
?>