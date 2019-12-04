<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function suma_arrays($array1,$array2,$array3,&$suma){

    $suma1 = 0;
    $suma2 = 0;
    $suma3 = 0;
    
    foreach($array1 as $valor){
        
        $suma1 += $valor;
        
    }

     foreach($array2 as $valor){
        
        $suma2 += $valor;
        
    }
    
    foreach($array3 as $valor){
        
        $suma3 += $valor;
        
    }
    
    $suma = $suma1 + $suma2 + $suma3;
    
    

}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $array1 = [2,3,4];
        $array2 = [5,6,7];
        $array3 =  [8,9,10];
        
        $resultado;
        
        suma_arrays($array1,$array2,$array3, $resultado);
        
        echo $resultado;
        
        ?>
    </body>
</html>
