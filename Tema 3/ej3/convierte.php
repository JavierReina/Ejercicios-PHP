<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Convierte</title>
    </head>
    <body>
        <?php
        $euro = $_GET['euros'];
        echo $euro, " € son ", round($euro * 166.386, 2), " pesetas";
        ?>
    </body>
</html>
