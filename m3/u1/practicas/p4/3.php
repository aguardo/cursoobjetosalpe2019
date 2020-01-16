<?php


spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});


use ejercicio3\Numeros;


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
                    <label for="num1"> Numero 1 </label>
                    <input id="num1" name ="numeros[]" type = "number">
                </div> 
                <div>
                    <label for="num2"> Numero 2 </label>
                    <input id="num2" name ="numeros[]" type = "number">
                </div> 
                           
                <div>
                    <label for="num3"> Numero 3 </label>
                    <input id="num3" name ="numeros[]" type = "number">
                </div> 
                
                <div>
                    <label for="num4"> Numero 4 </label>
                    <input id="num4" name ="numeros[]" type = "number">
                </div>
                
                <div>
                    <label for="num5"> Numero 5 </label>
                    <input id="num5" name ="numeros[]" type = "number">
                </div>
                
                <div>
                    <label for="num6"> Numero 6 </label>
                    <input id="num6" name ="numeros[]" type = "number">
                </div> 
                <div>
                    <label for="num7"> Numero 7 </label>
                    <input id="num7" name ="numeros[]" type = "number">
                </div> 
                           
                <div>
                    <label for="num8"> Numero 8 </label>
                    <input id="num8" name ="numeros[]" type = "number">
                </div> 
                
                <div>
                    <label for="num9"> Numero 9 </label>
                    <input id="num9" name ="numeros[]" type = "number">
                </div>
                
                <div>
                    <label for="num10"> Numero 10 </label>
                    <input id="num10" name ="numeros[]" type = "number">
                </div> 
                
                
                
                <div>
                    
                    <input name ="submit" type = "submit" value="Enviar">
                   
                    <input name ="submit2" type = "reset" value="Restablecer">
                </div>
                
               
            </form>    
        
        <?php
            
            }else{

                $numeros  = new Numeros($_REQUEST['numeros']);
                
                var_dump($numeros);
            }
                
         ?>       
            
        
    </body>
</html>
