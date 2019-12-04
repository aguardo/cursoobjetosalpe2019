<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
function cuenta_vocales($string){
  
        $vocales = ["a","e","e","i","o","u"];
        
        $n_vocales = 0;
        
        $string_aux = strtolower($string);
        
        for($c=0;$c<strlen($string_aux);$c++){
                        
            if(in_array($string_aux[$c],$vocales)){
                
                $n_vocales++;
                
            }
            
            
        }
    
    
    return $n_vocales;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                     
        echo cuenta_vocales("Hoy es un gran dia");
                      
        ?>
    </body>
</html>
