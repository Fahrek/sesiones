<?php

    if( isset($_SESSION['user']) ){
        // Si tenemos configurado el usuario en el array de sesión
        // quiere decir que ya estamos logueados, por lo que no cargamos la página de error
        // y redirigimos a la página welcome

        header("Location: ".$base_path.'/welcome');
        exit();
    }else{

    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>
    <h1>Permiso Denegado</h1>
    <p>Estás intentando acceder a un área privada sin haberte logueado. Por favor, <a href="<?=$base_path?>/login">Logueate</a> antes para poder acceder.</p>
</body>
</html>