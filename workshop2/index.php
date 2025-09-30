<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h2>Registro de Usuario</h2>
        <br>
        <label for="username">Nombre</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="password">Apellido</label>
        <input type="text" name="apellido" required>
        <br>
        <label for="password">Correo</label>
        <input type="text" name="correo" required>
        <br>
        <label for="password">Telefono</label>
        <input type="text" name="telefono" required>
        <br>
        <input class="registro" type="submit" name="register">
    </form>
    <?php
        include("connection.php");
    ?>
</body>
</html>