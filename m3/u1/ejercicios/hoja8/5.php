<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php 
    require './Vehiculo.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $ford = new Vehiculo("DHH2323", "rojo", "false");
        var_dump($ford);
        $ford->apagar();
        
        $renault = new Vehiculo();
        var_dump($renault);
        
        
        ?>
    </body>
</html>
