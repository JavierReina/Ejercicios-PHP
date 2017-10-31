<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Escribe un programa que dado un número escriba por pantalla el día de la semana
al que corresponde
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        
        <form action="ej4.php" method="get">
            <input type="number" name="dia"><br>
            <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["dia"])) {
            $dia = $_GET["dia"];
            
            switch ($dia) {
                case 1:
                    echo "Lunes";
                    break;
                case 2:
                    echo "Martes";
                    break;
                case 3:
                    echo "Miércoles";
                    break;
                case 4:
                    echo "Jueves";
                    break;
                case 5:
                    echo "Viernes";
                    break;
                case 6:
                    echo "Sábado";
                    break;
                case 7:
                    echo "Domingo";
                    break;
                default:
                    echo "No me vengas de listillo";
                    break;
            }
        }
        ?>
    </body>
</html>
