<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function numerosiguales($num1,$num2){

    if($num1 == $num2){
    
        echo "<div>Iguales</div>";
    
    }else{
    
        echo "<div>Distintos</div>";
    
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
        numerosiguales(4,5);
        numerosiguales(52,52);
        ?>
    </body>
</html>
