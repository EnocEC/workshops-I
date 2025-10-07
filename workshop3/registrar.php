<?php
//archivo con el codigo para insertar en la bd a los usuarios

if (isset($_POST['btnEnv'])) {

    $nombre = trim($_POST['nombre']);
    $apellido1 = trim($_POST['apellido1']);
    $apellido2 = trim($_POST['apellido2']);
    $provincia = trim($_POST['cmbProvincias']);
    $registrado = false;

    if (strlen($nombre) > 1 && strlen($apellido1) > 1 && strlen($apellido2) > 1 && strlen($provincia) > 1) {
        $query = "Insert into usuarios Values (NULL, '$nombre', '$apellido1', '$apellido2', '$provincia');";
        $result = mysqli_query($conexion, $query);

        header("Location: login.php?name=$nombre");

        $registrado = true;
    } 
    
    if ($registrado) {
?>
        <h3 class="mensaje posi">¡Registro exitoso!</h3>;
    <?php
    } else {
    ?>
        <h3 class="mensaje nega">Faltan campos por llenar</h3>;
<?php
    }
}

?>