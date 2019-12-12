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
                <label for="ciudad">
                    Selecciona la ciudad
                </label> 
                <select id="ciudad" name="ciudad">
                    <optgroup label="Asia">
                        <option value="3">Delhi</option>
                        <option value="4">Hong Kong</option>
                        <option value="8">Mumbai</option>
                        <option value="11">Tokyo</option>
                    </optgroup>
                    <optgroup label="Europa">
                        <option value="1">Amsterdam</option>
                        <option value="5">London</option>
                        <option value="7">Moscu</option>
                    </optgroup>
                    <optgroup label="North America">
                        <option value="6">Los Angeles</option>
                        <option value="9">New York</option>
                    </optgroup>
                    <optgroup label="South America">
                        <option value="2">Los Angeles</option>
                        <option value="10">New York</option>
                    </optgroup>           
                    
                </select>
                <input type="submit" value="Enviar" name="boton">  
            </form>   
        
        <?php
        }else{
            var_dump($_REQUEST);
            $ciudades = [ "", "Amsterdam", "Buenos Aires", "Delhi", "Hong Kong", "London", "Los Angeles", "Moscu", "Mumbai", "New York", "Sao Paulo", "Tokyo"];
            
            
            echo "La ciudad seleccionada es:";
            
            echo "<div>".$ciudades[$_REQUEST['ciudad']]."</div>";
               
           
           
        
        }
        
        ?>
    </body>
</html>
