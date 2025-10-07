<?php
    //cerrar conexion

    if(isset($conexion) && $conexion){
        mysqli_close($conexion);
    }
?>