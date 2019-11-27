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

                    Introduzca primer numero <input required type="number" name="num1" value="" />
                    Introduzca segundo numero  <input required type="number" name="num2" value="" step="0.5"/>
                    Introduzca tercer numero <input required type="text" name="num3" value="" />
                     
                                      
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
            $a = $_REQUEST['num1']; 
            $b = $_REQUEST['num2']; 
            $c = $_REQUEST['num3']; 
            
            if( $a+$b == $c ){
                
                echo "Iguales";        
                
            }elseif($a + $c == $b){
                
                echo "Iguales";
                
            }elseif($b + $c == $a){
                
                echo "Iguales";
            }else {
                
                echo "Distintas";
            }
            
            
            
        }
        
        ?>
    </body>
</html>
