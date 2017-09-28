<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Realiza un conversor de pesetas a euros. La cantidad de pesetas que se quiere 
convertir estará almacenada en una variable
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 12</title>
    </head>
    <body>
        <form action="ej12.php" method="get">
            <input type="text" name="peseta">
            <input type="submit" value="enviar">
        </form>
        
        <?php
            $pese = $_GET['peseta'];
            echo $pese, " pesetas son ", $pese * 0.0060, " €";
        ?>
    </body>
</html>
