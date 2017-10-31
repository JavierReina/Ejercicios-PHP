<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Escribe un programa que solicite por teclado el valor de x e y de un punto en el plano.
Seguidamente, mostrará en pantalla el cuadrante al que pertenece dicho punto. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <form action="ej10.php" method="GET">
            x
            <input type="number" name="x"><br>
            y
            <input type="number" name="y"><br>
            <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["x"])) {
            $x = $_GET["x"];
            $y = $_GET["y"];
            
            if ($x == 0 && $y == 0) {
                echo "($x, $y) pertenece al eje de coordenadas";
            } else if ($x > 0 && $y > 0) {
                echo "($x, $y) pertenece al primer cuadrante";
            } else if ($x < 0 && $y > 0) {
                echo "($x, $y) pertenece al segundo cuadrante";
            } else if ($x > 0 && $y < 0) {
                echo "($x, $y) pertenece al cuarto cuadrante";
            } else {
                echo "($x, $y) pertenece al tercer cuadrante";
            }
        }
        ?>
    </body>
</html>
