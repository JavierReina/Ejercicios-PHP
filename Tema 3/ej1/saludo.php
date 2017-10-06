<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Saludo</title>
    </head>
    <body>
        <?php
        $nombre = $_GET["nom"];
        echo "Hola $nombre, bienvenido/a, encantado de saludarte";
        ?>
    </body>
</html>
