<?php

include("abrir_con.php");

$id = $_GET['id'];

if (isset($id) && isset($conexion)) {
    $consulta = "delete from users where id = '$id'";
    $ejec = mysqli_query($conexion, $consulta);

    header("Location: principal.php");
    exit;
} else {
    header("Location: principal.php");
    exit;
}

include("cerrar_con.php");

?>
