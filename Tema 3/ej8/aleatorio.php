<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aleatorio</title>
    </head>
    <body>
        <?php
        $x = $_GET["num1"];
        $y = $_GET["num2"];
        
        echo "El número aleatorio entre $x y $y es ", rand($x, $y);
        ?>
    </body>
</html>
