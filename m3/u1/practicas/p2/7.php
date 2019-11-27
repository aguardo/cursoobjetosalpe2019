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
        $dias_semana =  array('Lunes','Martes', 'Miércoles','Jueves','Viernes','Sábado','Domingo');
        $colores = array("uno" => "Rojo","dos" => "verde","tres" => "azul");
        ?>
    </body>
    
    <div>
        <p>Los dias de la semana son:</p>
        <?php
            echo "<p> $dias_semana[0] </p>";
            echo "<p> $dias_semana[1] </p>";
            echo "<p> $dias_semana[2] </p>";
            echo "<p> $dias_semana[3] </p>";
            echo "<p> $dias_semana[4] </p>";
            echo "<p> $dias_semana[5] </p>";
            echo "<p> $dias_semana[6] </p>";
         ?>
        
    </div>
    
    
    <div>
        <p>Los colores son:</p> 
        <?php
            echo "<p> $colores[uno] <p>";
            echo "<p> $colores[dos] <p>";
            echo "<p> $colores[tres] <p>";
        
        ?>
        
        
        
    </div>
</html>
