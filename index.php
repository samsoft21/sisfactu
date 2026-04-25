
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Acceso</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .login-card {
            margin-top: 8vh;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 col-md-6 col-lg-4 loginve">

            <div class="card login-card p-4">

                <h3 class="text-center mb-4">Iniciar sesión</h3>

                <form id="formLogin" action="" method="POST">

                    <!-- Usuario -->
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nickname</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="nickname" 
                            name="nickname" 
                            placeholder="Ingresa tu usuario"
                            required
                        >
                    </div>

                    <!-- Clave -->
                    <div class="mb-3">
                        <label for="clave" class="form-label">Clave</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="clave" 
                            name="clave" 
                            placeholder="Ingresa tu contraseña"
                            required
                        >
                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-end gap-2">
                        <button type="submit" class="btn btn-primary btn_acceso">
                            Ingresar
                        </button>

                        <button type="reset" class="btn btn-outline-danger btn_cerrar">
                            Limpiar
                        </button>
                    </div>

                </form>

                <hr>

                <p class="text-center mb-0">
                    ¿No tienes cuenta? 
                    <button class="text-decoration-none btn-registro">Regístrate</button>
                </p>

            </div>

        </div>

    </div>
<div id="fregistro" class="container mt-4 d-none">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <form class="p-4 border rounded shadow-sm bg-light">

        <h4 class="mb-4 text-center">Registro</h4>

        <div class="mb-3">
          <label for="cedula" class="form-label ">Cédula</label>
          <input type="text" class="form-control input-sm w-50" id="cedula" required>
        </div>

       <div class="d-flex gap-2"> 
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control input-sm w-100" id="apellido" required>
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control input-sm w-100" id="nombre" required>
        </div>
</div>
        <div class="mb-3">
          <label for="celular" class="form-label">Celular</label>
          <input type="text" class="form-control input-sm" id="celular" required>
        </div>

<div class="mb-3">
          <label for="nick" class="form-label">Nickname</label>
          <input type="text" class="form-control input-sm" id="nick" required>
        </div>

        <div class="mb-3">
          <label for="miclave" class="form-label">clave</label>
          <input type="password" class="form-control input-sm" id="miclave" required>
        </div>


        <button type="btn" class="btn btn-primary w-100 btn_registro">
          Registrar
        </button>

      </form>

    </div>
  </div>
</div>


</div>
<script src="./js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/index.js"></script>
</body>
</html>