<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se 
puede hacer íntegramente en HTML, ve intercalando HTML y PHP para ir familiriarizándote
con éste último.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
        <style>
            table, tr, th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
              <th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th>
            </tr>
        <?php
          echo "<tr><td>Empresa</td><td>Interfaces</td><td>Cliente</td><td>Servidor</td><td>Interfaces</td></tr>";
          echo "<tr><td>Empresa</td><td>Interfaces</td><td>Cliente</td><td>Servidor</td><td>Interfaces</td></tr>";
          echo "<tr><td>Empresa</td><td>Interfaces</td><td>Cliente</td><td>Servidor</td><td>Interfaces</td></tr>";
          echo "<tr><td colspan=5><center>R E C R E O</center></td></tr>";
          echo "<tr><td>Libr Conf</td><td>Despliegue</td><td>Servidor</td><td>Cliente</td><td>Servidor</td></tr>";
          echo "<tr><td>Libr Conf</td><td>Despliegue</td><td>Servidor</td><td>Cliente</td><td>Servidor</td></tr>";
          echo "<tr><td>Libr Conf</td><td>Despliegue</td><td>Empresa</td><td>Cliente</td><td>Servidor</td></tr>";
        ?>    
        </table>
    </body>
</html>
