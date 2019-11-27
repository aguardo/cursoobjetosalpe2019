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
            for($c=0;$c<7;$c++){
                echo "<p>$dias_semana[$c]</p>";
                
            }
         ?>
        
    </div>
    
    
    <div>
        <p>Los colores son:</p> 
        <?php
            foreach ($colores as $c){
                
                echo "<p>$c</p>";        
            }
        
        ?>
        
        
        
    </div>
</html>
