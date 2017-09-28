<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Desarrolla un programa que calcule el área de un triángulo de base 10 y altura 5.
Recuerda que el área de un triángulo se calcula multiplicando la base por la altura, 
y dividiendo el resultado entre dos. Deberá mostrarse el resultado por pantalla 
según el siguiente formato:
    El área del triángulo de base ... y altura ... es ...
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
            $base = 10;
            $altura = 5;
            
            echo "El área del triángulo de base ", $base, " y altura ", $altura, " es ", ($base * $altura) / 2;
        ?>
    </body>
</html>
