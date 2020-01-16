<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    include "Coche.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $coche = new Coche();
        $coche->color = 'Rojo';
        $coche->marca = 'Honda';
        $coche->numero_puertas = 4;
        $coche->llenarTanque(10);
        $coche->acelerar();
        $coche->acelerar();
        $coche->acelerar();
        
        var_dump($coche);
        
        
        ?>
    </body>
</html>
