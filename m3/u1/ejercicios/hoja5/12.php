<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function reverse_string($texto){

    $texto_array = str_split($texto); 
          
    $n = count($texto_array);
    
    for($c = 0 ; $c<$n; $c++){
        
        $reverse_array[$n-1-$c]= $texto_array[$c];
        
    }
   
    ksort($reverse_array);
    
    return implode($reverse_array);
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                     
        echo reverse_string("Esto es un texto de prueba");
                      
        ?>
    </body>
</html>
