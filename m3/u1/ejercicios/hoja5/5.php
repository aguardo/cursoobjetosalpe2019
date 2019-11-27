<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
  
function producto($array){
    
    for($c=0, $producto = 1; $c<count($array);$c++){
          
        $producto *= $array[$c]; 
    }
    
    return $producto;
}
    
    
?>    



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $numeros= [ 1 , 2 , 3, 30];
        echo producto($numeros);
        ?>
    </body>
</html>
