<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function reverse_array($array){

    $reverse_array = [];
    
    $n = count($array);
    
    for($c = 0 ; $c<$n; $c++){
        
        $reverse_array[$n-1-$c]= $array[$c];
        
    }
    
    ksort($reverse_array);

    return $reverse_array;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $array1 = [2,3,4,6,8,10];
               
        var_dump(reverse_array($array1));
                      
        ?>
    </body>
</html>
