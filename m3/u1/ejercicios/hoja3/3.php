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

                    Introduce un número <input required type="number" name="num1" value="" />
                   
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>
            
        <?php    
            
            
        }else {
            
           $numero = 0;
           $salida = "";
            
           $numero = $_REQUEST['num1']; 
      
            switch($numero){
            case 1:
                $salida = "Lunes";
                break;
            
            case 2:
                $salida = "Martes";
                break;
            
            case 3:
                $salida = "Miércoles";
                break;
            
            case 4:
                $salida = "Jueves";
                break;
            
            case 5:
               $salida = "Viernes";
                break;
            
            case 6:
                $salida = "Sábado";
                break;
                
            case 7:    
                $salida = "Domingo";
                break;
                
            default:
                echo "no valido";
                
            }
                     
        echo "$salida";
                
        }
        
        
        
        ?>
    </body>
</html>
