<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | Inventarios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/E Del logo ENEL.png" type="image/x-icon">
    <link rel="stylesheet" href="vista/css/normalize.css">
    <link rel="stylesheet" href="vista/css/Login.css">
</head>
<body>
    <div class="contenedor-formulario contenedor">
        
        <div class="imagen-formulario">
        </div>

        <form action="config/LOGUEAR.php" method="post" class="formulario">
            <div class="texto-formulario">
                <h2>Bienvenido de Nuevo</h2>
                <p>Inicia sesión con tu cuenta</p>
            </div>
            <div class="input">
                <label for="usuario">Usuario</label>
                <input placeholder="Ingresar usuario" type="text" name="usuario"> 
            </div>
            <div class="input">
                <label for="contraseña">Contraseña</label>
                <input placeholder="Ingrese contraseña" type="password" name="password">
            </div>
            <div class="input">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>