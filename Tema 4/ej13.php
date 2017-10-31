<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Desarrolla un programa que indique por pantalla cuántos dígitos tiene un número entero
que puede ser positivo o negativo. se permiten números de hasta 5 dígitos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <form action="ej13.php" method="get">
          <input type="number" min="-99999" max="99999" name="n"><br>
          <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["n"])) {
            
          $n = $_GET['n'];
          // si el número es negativo, se le quita el signo
          if ($n < 0){
            $n = -$n;
          }
          
          if ( $n < 10 ) {
            $digitos = 1;
          }
          
          if (( $n >= 10 ) && ( $n < 100 )) {
            $digitos = 2;
          }
          
          if (( $n >= 100 ) && ( $n < 1000 )) {
            $digitos = 3;
          }
          
          if (( $n >= 1000 ) && ( $n < 10000 )) {
            $digitos = 4;
          }
          
          if ( $n >= 10000 ) {
            $digitos = 5;
          }
          echo "El número introducido tiene $digitos dígitos.";
        }
        ?>
    </body>
</html>
