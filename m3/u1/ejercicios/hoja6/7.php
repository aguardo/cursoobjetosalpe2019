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
                <legend>
                    Seleccione la ciudad
                </legend>    
                <input type="radio" name="ciudad" id="SS" value="SS">
                <label for="SS">Santander </label>
                <input type="radio" name="ciudad" id="PO" value="PO">
                <label for="PO">Potes</label>
                <input type="radio" name="ciudad" id="PA" value="PA">
                <label for="PA">Palencia </label>
                <input type="submit" value="Enviar" name="boton">  
            </form>   
        
        <?php
        }else{
            var_dump($_REQUEST);
            $ciudades = [ "SS" => "santander", "PA" => "palencia", "PO" => "potes"];
            
            
            echo "La ciudad seleccionada es:";
            
            echo "<div>".$ciudades[$_REQUEST['ciudad']]."</div>";
               
           
           
        
        }
        
        ?>
    </body>
</html>
