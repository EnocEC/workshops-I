<?php
    $conexion = mysqli_connect("localhost", "root", "", "registro");

    if (isset($_POST['register'])) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']); 
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);

        $consulta = "INSERT INTO datos(nombre, apellido, telefono, correo) VALUES ('$nombre', '$apellido', '$telefono', '$correo')";
        mysqli_query($conexion, $consulta);
    }
?>