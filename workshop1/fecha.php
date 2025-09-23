<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora en Costa Rica</title>
</head>
<body>
    <?php
    // Establecer la zona horaria a Costa Rica
    date_default_timezone_set('America/Costa_Rica');

    // Mostrar la fecha y hora actual en el formato Y-m-d H:i:s
    echo "<h1>Fecha y hora actual en Costa Rica: " . date("Y-m-d H:i:s") . "</h1>";
    ?>
</body>
</html>
