<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Desarrolla un programa que almacene el valor de PI. Seguidamente deberá mostrar en pantalla 
el resultado de calcular el área de una circunferencia de radio 3
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php
            $radio = 3;
            echo "El área del círculo es: A = π * r<sup>2</sup> = ", round(pi() * pow($radio, 2), 2);
        ?>
    </body>
</html>
