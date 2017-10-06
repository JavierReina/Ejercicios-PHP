<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Area</title>
    </head>
    <body>
        <?php
        $base = $_GET["bas"];
        $altura = $_GET["alt"];
            
        echo "El área del triángulo de base $base y altura $altura es ", ($base * $altura) / 2;
        ?>
    </body>
</html>
