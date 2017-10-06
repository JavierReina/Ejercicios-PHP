<!DOCTYPE html>
<!--
Francisco Javier Reina Benítez

Ésta página es la que procesa y muestra los datos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Megabyte</title>
    </head>
    <body>
        <?php
        $kilo = $_GET["kil"];
        
        echo "$kilo Kilobytes son ", $kilo / 1024, " Megabytes";
        ?>
    </body>
</html>
