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

                    Introduce la distancia en millas <input required type="number" name="num1" value="" />
                   
                   
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
           $millas = $_REQUEST['num1']; 
           
           $metros = $millas * 1852;           
                     
            echo "Metros $metros";
      
                
        }
        
        ?>
    </body>
</html>
