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
            <form name ="f">
                <select name="ciudad">
                    <option value="0"> Santander </option>
                    <option value="1"> Palencia </option>
                    <option value="2"> Potes </option>              
                </select>
                <input type="submit" value="Enviar" name="boton">  
            </form>   
        
        <?php
        }else{
            var_dump($_REQUEST);
            $ciudades = array("santander","palencia","potes");
            echo $ciudades[$_REQUEST['ciudad']];
        
        }
        
        ?>
    </body>
</html>
