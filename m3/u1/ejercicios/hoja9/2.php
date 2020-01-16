<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});


use ejercicio2\Persona;

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        $padre = new Persona("Ramon", "Abramo", 35);
        $hijo = $padre;
        $hija = clone $padre;
        $hijo->setEdad(100);
        $hija->setEdad(50);
        var_dump($hijo);
        var_dump($padre);
        var_dump($hija);
        
        
        ?>
    </body>
</html>
