<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function coincidencia_array($array1,$array2){
  
    $coincidencias = 0;
    
    for($c=0; $c<count($array1);$c++){
        
        if($array1[$c] == $array2[$c]){
            
            $coincidencias++;            
        }
        
    }
       
    return $coincidencias;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "<div>".coincidencia_array([40,21,12,8],[5,21,32,8])."</div>";
       
                             
        ?>
    </body>
</html>
