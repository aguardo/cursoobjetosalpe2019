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

                    numero1 <input required type="number" name="num1" value="" />
                    numero2 <input required type="number" name="num2" value="" />
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
           $numero = 0;
           $numero1 = 0;
           $tipo1 = "";
            
           $numero = $_REQUEST['num1']; 
           $numero1 = $_REQUEST['num2']; 
            
           if($numero > $numero1){
               
               $salida = "tipo 1";
               
               
           }else if ($numero == $numero1){
               
               $salida = "tipo 2";
                    
           }else{
               
               $salida = "tipo 3";
               
               if($numero1 > 10){
                   
                   $salida ="tipo 31";                   
                   
               }else{
                   
                   $salida = "tipo 32";
                   
                   
                   
               }
               
               
               
           }
            
                echo "$salida";
                
                
        }
        
        
        
        ?>
    </body>
</html>
