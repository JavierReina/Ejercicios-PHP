<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Escribe un programa que solicite un valor numérico entero positivo que representa
la altura de una pirámide y muestre en pantalla dicha estructura.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <?php
          $alturaIntroducida = $_GET['alturaIntroducida'];
          $figura = $_GET['figura'];
        
          if (!isset($alturaIntroducida)){
          ?>
          <form action="ej16.php" method="get">
            Altura: <input type="number" name="alturaIntroducida" min="1" max="10"><br>
            <input type="submit" value="Aceptar">
          </form>
          <?php
          } else { // pinta la pirámide //////////////////////////////
            $altura = 1;
            $espacios = $alturaIntroducida - 1;
            while ($altura <= $alturaIntroducida) {
              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp;&nbsp;";
              }
              // pinta la línea
              for ($i = 1; $i < $altura * 2; $i++) {
                echo "* ";
              }
              echo "<br>";
              
              $altura++;
              $espacios--;
            }          
          }
          ?>
    </body>
</html>
