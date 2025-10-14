<?php
if (!isset($id)) {
    if (isset($_POST['save']) && $conexion) {
        $nombre = trim($_POST['nombre']);
        $apellido1 = trim($_POST['apellido1']);
        $apellido2 = trim($_POST['apellido2']);
        $correo = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);

        $consulta = "Insert into users values(NULL, '$nombre','$apellido1','$apellido2','$correo','$contrasena','0')";
        $ejecucion = mysqli_query($conexion, $consulta);

        header("Location: principal.php");
        exit;
    }
} else {
    if (isset($_POST['save']) && $conexion) {
        $nombre = trim($_POST['nombre']);
        $apellido1 = trim($_POST['apellido1']);
        $apellido2 = trim($_POST['apellido2']);
        $correo = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);

        $consulta = "Update users set nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2', correo = '$correo', contrasena = '$contrasena' where id = '$id'";
        $ejecucion = mysqli_query($conexion, $consulta);

        header("Location: principal.php");
        exit;
    }
}
