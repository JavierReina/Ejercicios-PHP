<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Radio</title>
    </head>
    <body>
        <?php
        $radio = $_GET["rad"];
        
        echo "El área del círculo es A = ", round(pi() * pow($radio, 2), 2);
        ?>
    </body>
</html>
