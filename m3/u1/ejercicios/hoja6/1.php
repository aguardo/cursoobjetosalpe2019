<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        $posicion = strrpos($url,"/");
        $path = substr($url, 0, $posicion);
        echo ("Location: $path" . "/destino.php?error='Introduce los datos necesarios'");
        
        ?>
    </body>
</html>
