<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Realiza un conversor de euros a pesetas. La cantidad de euros que se quiere convertir
estará almacenada en una variable
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <form action="ej11.php" method="get">
            <input type="text" name="euros">
            <input type="submit" value="enviar">
        </form>
        
        <?php
            $euro = $_GET['euros'];
            echo $euro, " € son ", round($euro * 166.386, 2), " pesetas";
        ?>
    </body>
</html>
