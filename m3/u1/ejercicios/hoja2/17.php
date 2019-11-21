<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
            
            if(!empty($_REQUEST)){
                
               if(((int)$_REQUEST["nombre"] > 0)){
                   
                   $caso = "bien";
               }else{
                   
                   $caso= "mal";
               }
                
                
                
                
            }else{
                
                $caso = "mal";
            }    
            
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        if($caso == "bien"){
            
           var_dump($_REQUEST);
           
        }else{
            ?>
            
            <div>
                <form name="f">

                    numero <input type="text" name="nombre" value="" />
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>

            </div>
            
            <?php
        }
        
            
            
        ?>
    </body>
</html>
