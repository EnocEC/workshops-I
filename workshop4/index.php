
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <form method="post" action="iniciar_sesion.php">
        <h2>Inicio de sesion</h2>

        <div class="fila">
            <label for="correo">Correo</label>
            <input class="campo" type="text" name="correo" placeholder="Ingrese su correo">
        </div>

        <div class="fila">
            <label for="contra">Contraseña</label>
            <input class="campo" type="password" name="contrasena" placeholder="Ingrese su contraseña">
        </div>

        <button type="submit" name="inicio" class="boton">Iniciar</button>

    </form>
</body>

</html>
