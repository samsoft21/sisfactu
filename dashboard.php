<?php
session_start();


if(!$_SESSION['3520046b263473a59e2fdb917026df5f8396e08a']){
location:'index.html';
return;
}


        $_SESSION['usuario'];
// dashboard.php - Dashboard de bienvenida simple en PHP

$usuario = $_SESSION['usuario'];
$notificaciones = 12;
$ventas = 8320;
$usuarios = 1245;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
        }

        .container {
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            background: #4f46e5;
            padding: 10px 15px;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .card {
            background: #1e293b;
            padding: 15px;
            border-radius: 10px;
        }

        .title {
            font-size: 14px;
            color: #94a3b8;
        }

        .value {
            font-size: 22px;
            font-weight: bold;
            margin-top: 5px;
        }

        .section {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .box {
            background: #1e293b;
            padding: 20px;
            border-radius: 10px;
        }

        .action-btn {
            display: block;
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background: transparent;
            border: 1px solid #334155;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        .action-btn:hover {
            background: #334155;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <div>
            <h1>Bienvenido 👋 <?php echo $usuario; ?></h1>
            <p style="color:#94a3b8;">Tu panel de control está listo</p>
        </div>
        <button class="btn">Empezar</button>
    </div>

<div class="menu-icons mt-2">
        <a href="#" class="btn-icon bg1" title="Inicio">
            <i class="bi bi-house-fill"></i>
        </a>
</div>



    <div class="row">
       <table class="table table-hover table-bordered table-striped table-sm align-middle shadow-sm rounded">
    <thead class="table-dark text-center">
                <th>Nro</th>
                <th>Usuario</th>
                <th>Estado</th>
            </thead>
            <tbody id="tablausuario">

            </tbody>
        </table>
    </div>

    
    <div class="grid">
        <div class="card">
            <div class="title">Usuarios</div>
            <div class="value"><?php echo $usuarios; ?></div>
        </div>

        <div class="card">
            <div class="title">Ventas</div>
            <div class="value">$<?php echo $ventas; ?></div>
        </div>

        <div class="card">
            <div class="title">Notificaciones</div>
            <div class="value"><?php echo $notificaciones; ?></div>
        </div>

        <div class="card">
            <div class="title">Estado</div>
            <div class="value">Activo</div>
        </div>
    </div>

    <div class="section">
        <div class="box">
            <h3>Resumen rápido</h3>
            <p style="color:#94a3b8;">
                Aquí puedes ver métricas generales del sistema y actividad reciente en tiempo real.
            </p>
        </div>

        <div class="box">
            <h3>Acciones rápidas</h3>
            <button class="action-btn">Crear usuario</button>
            <button class="action-btn">Ver reportes</button>
            <button class="action-btn">Configuración</button>
        </div>
    </div>

</div>

</body>
<script src="./js/jquery.js"></script>

<script src='./js/app.js'></script>
</html>