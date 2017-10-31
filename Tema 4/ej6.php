<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Realiza un programa que resuelva una ecuación de primer grado (ax + b = 0)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <form action="ej6.php" method="GET">
            a
            <input type="number" name="a"><br>
            b
            <input type="number" name="b"><br>
            <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["a"])) {
            $a = $_GET["a"];
            $b = $_GET["b"];
            
            if ($a == 0) {
                echo "Operación no válida";
            } else {
                echo "x = ",(-$b / $a);
            }
        }
        ?>
    </body>
</html>
