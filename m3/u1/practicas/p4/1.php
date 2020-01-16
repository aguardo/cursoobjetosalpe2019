<?php


spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});


use ejercicio1\Numeros;


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
            <div>Introduzca tres números</div>
            <form name ="uno" method="get">
                <div>
                    <label for="numero1"> Número 1 </label>
                    <input id="numero1" name ="numeros[]" type = "number">
                </div> 
                <div>
                    <label for="numero2"> Número 2 </label>
                    <input id="numero2" name ="numeros[]" type = "number">
                </div>
                <div>
                    <label for="numero3"> Número 3 </label>
                    <input id="numero3" name ="numeros[]" type = "number">
                </div>
                
                <div>
                    
                    <input name ="submit" type = "submit" value="Enviar">
                   
                    <input name ="submit2" type = "reset" value="Restablecer">
                </div>
                
               
            </form>    
        
        <?php
            
            }else{

                $numeros = new Numeros($_REQUEST['numeros']);
                
                $numeros -> imprimir();
            }
                
         ?>       
            
        
    </body>
</html>
