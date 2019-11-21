<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $v1 = 0;
        $v2 = $v3 = $v4 = 0;
        $v5 =  array(0,0,0,0,0);
        
        foreach($GLOBALS as $indice => $value){
        
            echo "<br> $indice:$value";
            
        }
       
        
        foreach($v5 as $key => $value) {
            
            echo "<br>\$v5[$key] = $value";
        }
        
        
        ?>
    </body>
</html>
