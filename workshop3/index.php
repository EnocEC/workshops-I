<?php
//archivo para registrar graficamente un usuario 

include("abrir_con.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" action="">
        <h2>Registro</h2>

        <div class="fila">
            <label for="nombre">Nombre</label>
            <input class="campo" type="text" name="nombre" placeholder="Ingrese su nombre">
        </div>

        <div class="fila">
            <label for="apellido1">Primer Apellido</label>
            <input class="campo" type="text" name="apellido1" placeholder="Ingrese su primer apellido">
        </div>

        <div class="fila">
            <label for="apellido2">Segundo Apellido</label>
            <input class="campo" type="text" name="apellido2" placeholder="Ingrese su segundo apellido">
        </div>

        <div class="fila">
            <label for="provincia">Provincia</label>
            <select name="cmbProvincias" class="campo">

                <?php
                $consulta = "select nombre from provincias";
                $resultado = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $provincia = $fila['nombre'];
                    echo "<option value='$provincia'>$provincia</option>";
                }
                ?>


            </select>
        </div>

        <button type="submit" name="btnEnv" class="boton">Enviar</button>

        <?php
        include("registrar.php");
        ?>
    </form>
</body>

</html>

<?php
include("cerrar_con.php");
?>