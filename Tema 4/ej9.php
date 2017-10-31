<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten
en el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la 
calificación obtenida.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        Como no se qué preguntar me tomo la libertad de hacer preguntas Geeks<br><br>
        <form action="ej9.php" method="GET">
            1.- Fire Emblem, ¿Que color de pelo es más común en los Lords?<br>
                <input type="radio" name="a" value="1"> Azul<br>
                <input type="radio" name="a" value="0"> Rojo<br>
                <input type="radio" name="a" value="0"> Marrón<br>
                <input type="radio" name="a" value="0"> Negro<br>
            2.- Kingdom Hearts, ¿Cómo se llama el arma de Sora?<br>
                <input type="radio" name="b" value="0"> Motosierra<br>
                <input type="radio" name="b" value="0"> Bastón<br>
                <input type="radio" name="b" value="1"> Llave Espada<br>
                <input type="radio" name="b" value="0"> No usa arma<br>
            3.- Bravely Default, ¿Cuál es la ciudad natal de Magnolia?<br>
                <input type="radio" name="c" value="0"> Norende<br>
                <input type="radio" name="c" value="1"> La Luna<br>
                <input type="radio" name="c" value="0"> Florem<br>
                <input type="radio" name="c" value="0"> Ancheim<br>
            4.- My Hero Academia, ¿Cómo es llamado el poder que obtiene Midorilla izuku?<br>
                <input type="radio" name="d" value="0"> All For One<br>
                <input type="radio" name="d" value="1"> One For All<br>
                <input type="radio" name="d" value="0"> Copy<br>
                <input type="radio" name="d" value="0"> Air Cannon<br>
            5.- ¿Cómo se llama el protagonista de The Legend of Zelda?<br>
                <input type="radio" name="e" value="0"> Tetra<br>
                <input type="radio" name="e" value="0"> Ganondorf<br>
                <input type="radio" name="e" value="0"> Zelda<br>
                <input type="radio" name="e" value="1"> Link<br>
            <button type="submit">enviar</button>
        </form>
        <?php
        if (isset($_GET["a"])) {
            echo "Puntuación: ", $_GET["a"] + $_GET["b"] + $_GET["c"] + $_GET["d"] + $_GET["e"];
        }
        ?>
    </body>
</html>
