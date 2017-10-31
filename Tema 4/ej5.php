<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

En la anterior relación de ejercicios se pidió escribir un programa que calcula el 
salario semanal de un empleado en base a las horas trabajadas, teniendo en cuenta
que se pagarían 12 euros por hora. Ampliamos este ejercicio añadiendo una condición
adicional: a partir de las 41 horas de trabajo se pagará a 16 euros la hora
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <form action="ej5.php" method="GET">
            Horas Trabajadas<br>
            <input type="number" name="hora" min="0"><br>
            <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["hora"])) {
            $hora = $_GET["hora"];
            
            if ($hora > 41) {
                $hora = $hora - 41;//le quito 41 de las horas para calcular las últimas
                
                echo $hora * 16 + 492, " €";
            } else {
                echo $hora * 12," €";
            }
        }
        ?>
    </body>
</html>
