<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function ordena_array($array){
  
        sort($array);
    
    
    return $array;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                     
        var_dump ( ordena_array(["abc","españa","buenismo","zarrapastroso","totalitario","manubrio"]));
                      
        ?>
    </body>
</html>
