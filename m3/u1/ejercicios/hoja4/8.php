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

                    Introduzca número de horas <input required type="number" name="horas" value="" />
                    Introduzca precio hora <input required type="number" name="precio" value="" step="0.5"/>
                    Introduzca nombre <input required type="text" name="nombre" value="" />
                     
                                      
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
            $horas = $_REQUEST['horas']; 
            $precio = $_REQUEST['precio']; 
            
            if($horas <= 40){
                
                $salario = $horas * $precio;
                
                
            }else{
                
                $salario = $precio * 40 + ($horas-40)* $precio * 1.5;
                
                
            }
                      
          
            echo "El salario es $salario";
                
        }
        
        ?>
    </body>
</html>
