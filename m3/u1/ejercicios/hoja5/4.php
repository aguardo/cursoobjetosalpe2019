<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
  
function imprimirsuma($array){
    
    for($c=0, $suma= 0; $c<count($array);$c++){
          
        $suma += $array[$c]; 
    }
    
    return $suma;
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
        echo imprimirsuma($numeros);
        ?>
    </body>
</html>
