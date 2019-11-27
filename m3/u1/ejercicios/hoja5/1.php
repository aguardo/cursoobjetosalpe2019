<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
  
function imprimir10numeros(){
    
    for($c=0; $c<10;$c++){
          
        echo $c*4 . " ";
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
        imprimir10numeros();
        ?>
    </body>
</html>
