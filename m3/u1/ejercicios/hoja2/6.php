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
            $alumnos = [ "Ramon", "Jose" , "Pepe" , "Ana"];
            
            foreach ($alumnos as $alumno){
                                
                echo "<div> $alumno </div>";
                
            }
        ?>
        
               
    </body>
</html>
