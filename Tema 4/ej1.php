<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Desarrolla un script que, dado tres valores numéricos a,b y c por teclado, indique 
VERDADERO cuando el valor de a sea igual al de b, o bien b sea igual al de c
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        
        <form action="ej1.php" method="GET">
            a 
            <input type="number" name="num1"><br>
            b 
            <input type="number" name="num2"><br>
            c 
            <input type="number" name="num3" required><br>
            <button type="submit">enviar</button>
        </form>
        
        <?php
        if (isset($_GET["num3"])) { 
            
            $a = $_GET["num1"];
            $b = $_GET["num2"];
            $c = $_GET["num3"];
            
            if ($c == $a || $c == $b) {
                echo "Verdadero";
            } 
        }
        ?>
    </body>
</html>
