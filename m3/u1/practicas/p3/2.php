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
            <form name ="uno" method="post">
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
                
                <input type="submit" value="Enviar" name="boton">  
            </form>    
        
        <?php
        }else{
           
            foreach($_POST as $indice => $valor){
                
                echo "<hr>$indice = $valor";
            }
        }
        
        ?>
    </body>
</html>
