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


use ejercicio1\Persona;
use ejercicio1\Estudiante;
use ejercicio1\Profesor;



?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $pepe = new Persona("Pepe", 35);
         var_dump($pepe);
         echo $pepe->estudios();
        ?>
    </body>
</html>
