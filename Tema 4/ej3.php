<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Realiza un programa que pida una hora por teclado y que muestre luego buenos días,
buenas tardes o buenas noches según la hora. Se utilizarán los de 6 a 12, de 13 a 20
 y de 21 a 5 respectivamente. Sólo se deben tener en cuenta las horas, los minutos
no se deben introducir por teclado
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <form action="ej3.php" method="GET">
            <input type="number" name="hora" max="24" min="0">
            <button type="submit">enviar</button>
        </form>
        <?php
            if (isset($_GET["hora"])) {
                $hora = $_GET["hora"];
                
                if ($hora >= 6 && $hora <= 12) {
                    echo "Buenos Días";
                } else if ($hora >= 13 && $hora <= 20) {
                    echo "Buenas Tardes";
                } else {
                    echo "Buenas Noches";
                }
            }
        ?>
    </body>
</html>
