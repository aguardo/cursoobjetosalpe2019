<?php

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
            <div>Formulario de ejemplo</div>
            <form name ="uno" method="get">
                <div>
                    <label for="nombre"> Nombre </label>
                    <input id="nombre" name ="nombre" type = "text">
                </div> 
                <div>
                    <label for="apellidos"> Apellidos </label>
                    <input id="apellidos" name ="apellidos" type = "text">
                </div>
                <div>
                    <label for="edad"> Edad </label>
                    <input id="edad" name ="edad" type = "text">
                </div>
                <div>
                    <label for="poblacion"> Poblacion </label>
                    <input id="poblacion" name ="poblacion" type = "text">
                </div>
                
                <div>
                    <label for="masculino"> Masculino </label>
                    <input id="masculino" name ="sexo" type = "radio" value="masculino">
                    <label for="femenino"> Femenino </label>
                    <input id="femenino" name ="sexo" type = "radio" value="femenino">
                </div>
                
                <div>
                    
                    <input name ="submit" type = "submit" value="Enviar">
                   
                    <input name ="submit2" type = "reset" value="Restablecer">
                </div>
                
               
            </form>    
        
        <?php
        }else{
           
        ?>
            <table>
                <tr>    
                <?php    
                foreach($_GET as $indice => $valor){
                    if($indice == "submit"){
                        
                        continue;
                    }
                    
                    
                    echo "<th>$indice </th>";
                }
        
        ?>
                 </tr>        
                
                 <tr>    
                <?php    
                foreach($_GET as $indice => $valor){
                    if($indice == "submit"){
                        
                        continue;
                    }
                    
                    
                    echo "<td>$valor </td>";
                }
        
        ?>
                 </tr>  
                 
                 
                 
                 
                 
            </table>
            
         <?php
         
                }
                
         ?>       
            
        
    </body>
</html>
