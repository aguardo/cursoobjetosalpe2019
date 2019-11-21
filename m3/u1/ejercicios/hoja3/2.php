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
                    numero3 <input required type="number" name="num3" value="" />
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
           $n1 = 0;
           $n2 = 0;
           $n3 = 0;
            
           $n1 = $_REQUEST['num1']; 
           $n2 = $_REQUEST['num2']; 
           $n3 = $_REQUEST['num3']; 
           
                     
           if($n1 == $n2){
               
               echo "No son distintos";
               
               
           }else if ($n1 == $n3){
               
                echo "No son distintos";
                    
                }else{


                    if($n2 == $n3){

                         echo "No son distintos";  

                    }else{

                        echo "Son distintos";                  


                    }
                              
               
                }
            
           
                
                
        }
        
        
        
        ?>
    </body>
</html>
