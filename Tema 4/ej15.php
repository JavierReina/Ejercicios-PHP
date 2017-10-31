<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Desarrolla un script que, dado un número entero positivo por teclado, indique si es primo
o no. Recuerda que un número es primo si es únicamente divisible por 1 y por sí mismo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <form action="ej15.php" method="get">
          <input type="number" name="n"><br>
          <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["n"])) {
            $n = $_GET["n"];
            $primo = 0;
            
            for($i = 1;$i < $n; $i++){
                if($n % $i == 0){
                    $primo++;
                }
            }
            
            if($primo >= 2 ){
                echo "No es primo";
            } else {
                echo "Es primo";
            }
        }
        ?>
    </body>
</html>
