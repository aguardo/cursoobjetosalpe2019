<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
            define("ruta","/agusPoo/m3/u1/ejercicios/hoja2/");
            if(!$_REQUEST){
                
                header("Location: " . ruta . "14.html");
                
            }
            
            
        ?>





<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            var_dump($_REQUEST);
            
            
        ?>
    </body>
</html>
