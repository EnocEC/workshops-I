<?php
include('abrir_con.php');

if (isset($_POST['inicio']) && $conexion) {
    $correo = trim($_POST['correo']);
    $contra = trim($_POST['contrasena']);
    $consulta = mysqli_query($conexion, "SELECT COUNT(*) FROM users WHERE correo = '$correo' AND 
    contrasena = '$contra' AND rol = 1");
    $fila = mysqli_fetch_row($consulta);
    $existe = $fila[0];

    if ($existe > 0) {
        header("Location: principal.php");
    } else {
        echo '<script>alert("No eres administrador");</script>';
    }
}

include('cerrar_con.php');
?>