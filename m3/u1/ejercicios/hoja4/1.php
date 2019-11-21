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

                    Introduce la base <input required type="number" name="base" value="" />
                    Introduce la altura <input required type="number" name="altura" value="" />
                   
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
           $base = 0;
           $altura = 0;
           
            
           $base = $_REQUEST['base']; 
           $altura = $_REQUEST['altura']; 
      
           $perimetro = 2*$base + 2*$altura;
           $area = $base * $altura;
            
                     
        echo "Perimetro $perimetro";
        echo "Area $area";
                
        }
        
        ?>
    </body>
</html>
