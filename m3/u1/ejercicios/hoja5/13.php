<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function imprime_divs($color1, $color2, $color3){
  
    $salida="";
    
    $colores = func_get_args();
    
    foreach($colores as $color){
        
        $salida .= '<div style="height:100px;background-color:'.$color.'"></div>';        
        
    }
    
    return $salida;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                     
        echo imprime_divs("red","blue","black");
                      
        ?>
    </body>
</html>
