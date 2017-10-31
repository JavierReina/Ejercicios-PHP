<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Escribe un programa que pida por teclado un día de la semana y muestre por 
pantalla las asignaturas que se imparten en clase ese día
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <form action="ej2.php" method="GET">
            <input type="text" name="dia"><br>
            <button type="submit">enviar</button>
        </form>
        <?php
            if (isset($_GET["dia"])) {
                $dia = $_GET["dia"];
                
                //paso el día escrito a minúscula para asegurarme de que está
                //escrito como espero y poder escribir menos condiciones
                $dia = strtolower($dia);
                $dia = ucfirst($dia);//le pongo la primera en mayúscula por estética
                if ($dia == "Lunes") {
                    echo "El $dia hay: Empresa y Libre configuración";
                } else if ($dia == "Martes") {
                    echo "El $dia hay: Interfaces y Despliegue";
                } else if ($dia == "Miercoles" || $dia == "Miércoles") {
                    echo "El $dia hay: Cliente, Servidor y Empresa";
                } else if ($dia == "Jueves") {
                    echo "El $dia hay: Servidor y Cliente";
                } else if ($dia == "Viernes") {
                    echo "El $dia hay: Interfaces y Servidor";
                } else if ($dia == "Sabado" || $dia == "Sábado" || $dia == "Domingo") {
                    echo "El $dia no hay clases";
                } else {
                    echo "Ese día no existe";
                }
            }
        ?>
    </body>
</html>
