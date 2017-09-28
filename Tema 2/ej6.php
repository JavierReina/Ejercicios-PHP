<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Escribe un programa que utilice las variables $x y $y. Asígnales los valores
144 y 999 respectivamente y, a continuación muestra por pantalla el valor de
cada variable, la suma, la resta, el producto y la división de ambas
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
            $x = 144;
            $y = 999;
            
            echo "<b>Valor x =</b> ", $x, " |<b> Valor y = </b>", $y, "<br/>";
            echo "<b>Suma: x + y =</b> ", $x + $y, "<br/>";
            echo "<b>Resta: x - y =</b> ", $x - $y, "<b> | y - x =</b> ", $y - $x, "<br/>";
            echo "<b>Multiplicación: x * y =</b> ", $x * $y, "<br/>";
            echo "<b>División: x / y = </b>", round($x / $y, 2), "<b> | y / x =</b> ", round($y / $x, 2);
        ?>
    </body>
</html>
