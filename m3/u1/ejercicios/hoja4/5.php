 <?php
      
if(empty($_REQUEST)){
    
    $caso = true;
    
}else{
    
    $caso = false;
    
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

        if($caso){
            
            ?>
            <form>

                    Introduce primer numero <input required type="number" name="num1" value="" />
                    Introduce segundo numero <input required type="number" name="num2" value="" />
                   
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
                      
           $numero1 = $_REQUEST['num1']; 
           $numero2 = $_REQUEST['num2']; 
      
           
           if ( $numero1 > $numero2){
               
                $salida = "El número mayor es $numero1";
               
               
           }else{
               
                if($numero1 == $numero2){
                  
                     $salida = "Son iguales";
                 
                                    
              }else{
                  
                  $salida = "El número mayor es $numero2";
                                   
              }
               
              
           }
           
          
            
                     
           echo $salida;
                
        }
        
        ?>
    </body>
</html>
