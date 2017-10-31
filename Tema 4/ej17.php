<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Crea un programa que solicite un valor numérico entero positivo por teclado y 
muestre en pantalla la suma de sus dígitos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 17</title>
    </head>
    <body>
        <form action="ej17.php" method="get">
            <input type="number" name="n" min="-99999" max="99999"><br>
          <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["n"])) {
            $numero = $_GET["n"];
            $total;
            
            for ($i = strlen($numero); $i > 0; $i--) {
                $total += $numero % 10;
                $numero = $numero / 10;
            }
            echo $total;
        }
        ?>
    </body>
</html>
