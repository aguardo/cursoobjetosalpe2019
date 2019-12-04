<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function muestra_vocales($string){
  
        $vocales = ["a","e","e","i","o","u"];
        
        $vocales_str = [];
        
        $string_aux = strtolower($string);
        
        for($c=0;$c<strlen($string_aux);$c++){
                        
            if(in_array($string_aux[$c],$vocales)){
                
                $vocales_str[] = $string_aux[$c];
                
            }
            
            
        }
    
    
    return $vocales_str;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                     
        var_dump ( muestra_vocales("Hoy es un gran dia"));
                      
        ?>
    </body>
</html>
