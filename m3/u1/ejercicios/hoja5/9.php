<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function numero_negativo($array){

    foreach($array as $valor){
        
        if($valor < 0 ){
            
            return "Hay negativos";
            
        }
        
    }

     return "Todos positivos";

}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $array1 = [1,5,9,-5,6,12];
        $array2 = [5,52,12,41,15,62,23];
        echo numero_negativo($array1);
        echo "<br>";
        echo numero_negativo($array2);
        ?>
    </body>
</html>
