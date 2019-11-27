<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
  
function imprimirnumerosarray($array){
    
    for($c=0; $c<count($array);$c++){
          
        echo $array[$c] . " ";
    }
    
}
    
    
?>    



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numeros = [1 , 5 , 6 , 25, 32];
        imprimirnumerosarray($numeros);
        ?>
    </body>
</html>
