<?php


spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});


use ejercicio2\Frase;


if(empty($_REQUEST)){
    $mal = true;
   
} else {
    
    $mal = false;
}

?>

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
        
        if($mal){
            ?>
            <div>Introduzca una frase</div>
            <form name ="uno" method="get">
                <div>
                    <label for="frase"> Frase </label>
                    <input id="frase" name ="frase" type = "text">
                </div> 
                                
                <div>
                    
                    <input name ="submit" type = "submit" value="Enviar">
                   
                    <input name ="submit2" type = "reset" value="Restablecer">
                </div>
                
               
            </form>    
        
        <?php
            
            }else{

                $frase = new Frase($_REQUEST['frase']);
                
                var_dump($frase);
            }
                
         ?>       
            
        
    </body>
</html>
