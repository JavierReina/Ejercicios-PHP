<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Realiza un programa que resuelva una ecuación de segundo grado
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <form action="ej8.php" method="GET">
            a
            <input type="number" name="a"><br>
            b
            <input type="number" name="b"><br>
            c
            <input type="number" name="c"><br>
            <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["a"])) {
            $a = $_GET["a"];
            $b = $_GET["b"];
            $c = $_GET["c"];
            
            if ($a == 0 && $b == 0) {
                echo "Operación no válida";
            } else if ($a == 0 && $b !== 0) {
                echo "x = ",(-$c / $b);
            } else if ($a !== 0 && $b == 0) {
                $radicando = -$c / $a;
                
                if ($radicando == 0) {
                    echo "x = 0";
                } else if ($radicando < 0) {
                    echo "Operación Irresoluble";
                } else {
                    echo "x = ", sqrt($radicando), "<br>";
                    echo "x = ", -sqrt($radicando);
                }
                
            } else if ($a !== 0 && $b !== 0 && $c == 0) {
                echo "x = 0<br>";
                echo "x = ", (-$b / $a);
            } else {
                echo "x = ", (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a), "<br>";
                echo "x = ", (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
            }
        }
        ?>
    </body>
</html>
