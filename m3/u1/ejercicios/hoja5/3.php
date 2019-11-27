<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
  
function imprimirnumeros($num1,$num2){
    
    for($c=$num1; $c<=$num2;$c++){
          
        echo $c . " ";
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
        imprimirnumeros(2,54);
        ?>
    </body>
</html>
