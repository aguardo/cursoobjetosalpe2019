<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function numerosiguales($num1,$num2){

    if($num1 == $num2){
    
        $salida =  "<div>Iguales</div>";
    
    }else{
    
        $salida = "<div>Distintos</div>";
    
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
        echo numerosiguales(4,5);
        echo numerosiguales(52,52);
        ?>
    </body>
</html>
