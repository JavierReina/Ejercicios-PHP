<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Crea un documento web que, a través de un cuadro desplegable, pregunte al usuario en 
primer lugar de qué figura geométrica quiere calcular el área, a elegir entre círculo, 
cuadrado y triángulo. Elegida la opción deseada se mostrará en pantalla tantos cuadros de 
texto como datos sean necesarios.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <select name="figura" form="selection">
            <option value="circulo">Círculo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="triangulo">Triángulo</option>
        </select><br>
        
        <form action="ej11.php" id="selection" method="get">
            <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["figura"])) {
            $figura = $_GET["figura"];
            
            if ($figura == "circulo") {
                echo "
                    <form action=\"ej11.php\" method=\"GET\">
                        radio
                        <input type=\"number\" name=\"radio\"><br>
                        <button type=\"submit\">enviar</button>
                    </form>";
            } else if ($figura == "cuadrado") {
                echo "
                    <form action=\"ej11.php\" method=\"GET\">
                        lado
                        <input type=\"number\" name=\"lado\"><br>
                        <button type=\"submit\">enviar</button>
                    </form>";
            } else {
                echo "
                    <form action=\"ej11.php\" method=\"GET\">
                        base
                        <input type=\"number\" name=\"base\"><br>
                        altura
                        <input type=\"number\" name=\"altura\"><br>
                        <button type=\"submit\">enviar</button>
                    </form>";
            }
        }
        
        //area circulo
        if (isset($_GET["radio"])) {
            $radio = $_GET["radio"];
            
            echo "El área del Círculo es  A = ", round(pi() * pow($radio, 2), 2, PHP_ROUND_HALF_UP);
        //area cuadrado
        } else if (isset($_GET["lado"])) {
            $lado = $_GET["lado"];
            
            echo "El área de un Cuadrado es  A = ", pow($lado, 2);
        //area triangulo
        } else if (isset($_GET["base"])) {
            $base = $_GET["base"];
            $altura = $_GET["altura"];
            
            echo "El área de un Triángulo es  A = ", ($base * $altura) / 2;
        }
        ?>
    </body>
</html>
