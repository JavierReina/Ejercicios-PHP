<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Volumen</title>
    </head>
    <body>
        <?php
        $radio = $_GET["rad"];
        $altura = $_GET["alt"];
        
        echo "El Volumen del cono es V = ", round((pi() * pow($radio, 2) * $altura) / 3, 2)
        ?>
    </body>
</html>
