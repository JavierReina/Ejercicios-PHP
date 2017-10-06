<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Matemático</title>
    </head>
    <body>
        <?php
        $x = $_GET["num1"];
        $y = $_GET["num2"];
        
        echo "<b>Valor x =</b> $x |<b> Valor y = </b> $y <br/>";
        echo "<b>Suma: x + y =</b> ", $x + $y, "<br/>";
        echo "<b>Resta: x - y =</b> ", $x - $y, "<b> | y - x =</b> ", $y - $x, "<br/>";
        echo "<b>Multiplicación: x * y =</b> ", $x * $y, "<br/>";
        echo "<b>División: x / y = </b>", round($x / $y, 2), "<b> | y / x =</b> ", round($y / $x, 2);
        ?>
    </body>
</html>
