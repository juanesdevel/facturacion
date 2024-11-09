
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="../scripts/horaYfecha.js" defer></script>
    <style>
 body {
            background-color: #fbfcfc ;
            
        }
        .sombra {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .logo {
            width: 150px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
<div class="container-fluid alert alert-info sombra">
    <div class="row">
        <div class="col-8">
            <h1>Administrador</h1>
            <a href="../conexion/cerrar_sesion.php" class="btn btn-danger btn-sm sombra" onclick="">Cerrar Sesión</a><span></span>
        </div>
        <div class="col-3">
            <p id="fechaHora"></p>
        </div>
        <div class="col-1">
            <div class="logo-container">
                <img src="../img/presentacion.png" alt="Logo de la empresa" class="logo" style="width: 80px; height: auto;">
            </div>
        </div>
    </div>    
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
           
            <a href="vistas/productos.php" class="btn btn-primary sombra">Administrar Productos</a>
          
        </div>
    </div>
</div>
<hr>

<div class="container-fluid">
    <div class="alert alert-info sombra">
        <div class="row">
            <div class="col-2"> 
                <a href="#" class="btn btn-primary" onclick="location.reload();">Actualizar página</a> 
            </div>
            <div class="col-4"> 
                <h3>Notificaciones <i class="fas fa-bell"></i>
 y Alertas <i class="fas fa-exclamation-triangle"></i>
</h3>
            </div>
        </div>
    </div>
</div>





