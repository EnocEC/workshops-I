<?php
include("abrir_con.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Principal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Usuarios registrados</h1>
    <hr>

    <div class="cont_principal">
        <a href="form.php" class="boton">Registrar usuarios</a>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "select * from users";
                $respuesta = mysqli_query($conexion, $query);
                ?>

                <?php while ($fila = mysqli_fetch_assoc($respuesta)): ?>
                    <tr>
                        <td><?= $fila['id']  ?></td>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['apellido1'] ?></td>
                        <td><?= $fila['apellido2'] ?></td>
                        <td><?= $fila['correo'] ?></td>
                        <td><?= $fila['contrasena'] ?></td>
                        <td>
                            <a href="form.php?id=<?= $fila['id'] ?>">Editar</a> |
                            <a href="borrar.php?id=<?= $fila['id'] ?>" onclick="return confirm('Desea eliminar este usuario?')">Eliminar</a>
                        </td>
                    </tr>

                <?php endwhile; ?>

            </tbody>
        </table>
    </div>

</body>

</html>

<?php
include("cerrar_con.php");
?>