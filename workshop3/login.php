<!--
    archivo de login para usuario
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post">
        <h2>Login</h2>

        <div class="fila">
            <label for="usuario">Usuario</label>
            <input class="campo" type="text" name="usuario" placeholder="Ingrese su usuario" value="<?php echo ($_GET['name']) ?>">
        </div>

        <button type="submit" class="boton">Enviar</button>
    </form>
</body>

</html>