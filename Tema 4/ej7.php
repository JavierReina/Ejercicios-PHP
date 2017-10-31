<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Investiga el uso de la función date para obtener el dia actual y mostrar en pantalla
el mensaje SITIO ONLINE o SITIO FUERA DE SERVICIO según el valor del día sea menor
o mayor de 10 respectivamente
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
        $fecha = date("j");
        
        if ($fecha <= 10) {
            echo "SITIO ONLINE";
        } else {
            echo "SITIO FUERA DE SERVICIO";
        }
        ?>
    </body>
</html>
