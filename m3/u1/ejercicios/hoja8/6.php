<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    
require 'Vehiculo_2.php'

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $ford = new Vehiculo_2("DHH2323", "rojo", false);
            $ford->mensaje();
            var_dump($ford);
            echo $ford -> ruedas();
            $ford::mensaje();
            Vehiculo_2::mensaje();
            Vehiculo_2::$ruedas = 6;
            echo Vehiculo_2::$ruedas;
            //echo $ford->ruedas;
            //Vehiculo_2::encender();
            $ford->encender();
            
        ?>
    </body>
</html>
