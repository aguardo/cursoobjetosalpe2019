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


use ejercicio1\Vehiculo;
use ejercicio1\Camion;
use ejercicio1\Autobus;


?>



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $camion = new Camion();
        $camion->encender();
        $camion->cargar(10);
        $camion->verificar_encendido();
        $camion->matricula = 'MDU - 293';
        $camion->apagar();
        $autobus = new Autobus();
        $autobus->encender();
        $autobus->subir_pasajeros(5);
        $autobus->verificar_encendido();
        $autobus->matricula = 'EDF - 923';
        $autobus->apagar();
        
        ?>
    </body>
</html>
