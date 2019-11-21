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
        $v5 = array(0, 1, 0, 1, 0);
        
        foreach($v5 as $key => $value){
        
            echo "<br>\$v5[$key]=$value";
        }
        
        for($c = 0; $c < count($v5); $c++){
            
            echo "<br>\$v5[$c]=$v5[$c]";
            
        }
        
        
        ?>
    </body>
</html>
