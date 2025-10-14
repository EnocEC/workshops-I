<?php
include("abrir_con.php");

$id = $_GET['id'] ?? null;

if (isset($id)) {
    $datos = "select * from users where id = " . $id;
    $query = mysqli_query($conexion, $datos);
    $row = mysqli_fetch_assoc($query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <form method="post" action="">
        <h2>Registro de Usuarios</h2>

        <div class="fila">
            <label for="nombre">Nombre</label>
            <input class="campo" type="text" name="nombre" placeholder="Ingrese el nombre del usuario"
                value="<?php echo $row['nombre'] ?? '' ?>">
        </div>

        <div class="fila">
            <label for="apellido1">Apellido 1</label>
            <input class="campo" type="text" name="apellido1" placeholder="Ingrese el primer apellido"
                value="<?php echo $row['apellido1'] ?? '' ?>">
        </div>

        <div class="fila">
            <label for="apellido2">Apellido 2</label>
            <input class="campo" type="text" name="apellido2" placeholder="Ingrese el segundo apellido"
                value="<?php echo $row['apellido2'] ?? '' ?>">
        </div>

        <div class="fila">
            <label for="correo">Correo</label>
            <input class="campo" type="text" name="correo" placeholder="Ingrese el correo"
                value="<?php echo $row['correo'] ?? '' ?>">
        </div>

        <div class="fila">
            <label for="contrasena">Contraseña</label>
            <input class="campo" type="text" name="contrasena" placeholder="Ingrese la contraseña"
                value="<?php echo $row['contrasena'] ?? '' ?>">
        </div>

        <button type="submit" name="save" class="boton">Guardar</button>

        <?php
        include("insert_edit.php");
        ?>

    </form>
</body>

</html>

<?php
include("cerrar_con.php");
?>