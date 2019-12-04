<?php

if(empty($_REQUEST)){
    $mal = true;
    $error = "Introducir los datos en el formulario"; 
}elseif(empty($_REQUEST["numero"])){
    $mal = true;
    $error = "El numero es obligatorio";
    
}elseif($_REQUEST["numero"] < 0) {
    $mal = true;
    $error = "El numero introducido debe ser mayor que 0";    
    
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
        
        if(!$mal){
            var_dump($_REQUEST);            
        }else{
            
            echo $error;
            ?>
            
        <form name ="f">
            numero <input type="number" name="numero" value ="">
            <input type="submit" value="Enviar" name="boton">  
            
        </form>
        
        <?php
        
        }
        
        ?>
    </body>
</html>
