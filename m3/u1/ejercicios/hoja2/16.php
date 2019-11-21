<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
            
            if(empty($_REQUEST)){
                
                $caso = "mal";
            }else{
                
                $caso = "bien";
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
                <form name="f" action="16.php">

                    numero <input type="text" name="nombre" value="" />
                    <input type="submit" value="Enviar" name = "boton"/>


                </form>

            </div>
            
            <?php
        }
        
            
            
        ?>
    </body>
</html>
