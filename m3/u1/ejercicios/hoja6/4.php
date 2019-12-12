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
                    <option value="SS"> Santander </option>
                    <option value="PA"> Palencia </option>
                    <option value="PO"> Potes </option>              
                </select>
                <input type="submit" value="Enviar" name="boton">  
            </form>   
        
        <?php
        }else{
            var_dump($_REQUEST);
            $ciudades = [ "SS" => "santander", "PA" => "palencia", "PO" => "potes"];
            echo $ciudades[$_REQUEST['ciudad']];
        
        }
        
        ?>
    </body>
</html>
