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
                $numeros = [
            1,4,5,6,7
        ];
            
        for($contador = 0; $contador < count($numeros); $contador ++){
            
            echo '<div>' . $numeros[$contador] . '<div>';
            
        }
        ?>
        
    </body>
</html>
