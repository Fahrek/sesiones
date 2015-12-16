<?php
    // Si accedemos a la página welcome: http://localhost:8080/sesiones/welcome
    // sin habernos logueado, nos redirigirá a la página de error
    if( !isset($_SESSION['user']) ){
        header("Location: ".$base_path.'/error');
        exit();
    }else{
        // Si hay creada una sesión cargamos el nombre de usuario
        $user = $_SESSION['user'];
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área privada</title>
</head>
<body>
    <h1>Bienvenido al área privada</h1>
    <p>Hola <?=$user?>, estás en el área privada.</p>
    <a href="?logout">Logout</a>
</body>
</html>