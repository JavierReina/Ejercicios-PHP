<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>trabajado</title>
    </head>
    <body>
        <?php
        $hora = $_GET["hor"];
        
        echo "Cobras ", $hora * 12, " €";
        ?>
    </body>
</html>
