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
        
        $alumnos= array();
        
        $alumnos[] = "Ramon";
        $alumnos[] = "Jose";
        $alumnos[] = "Pepe";
        $alumnos[] = "Ana";
        
        $alumnos1= array("Ramon","Jose","Pepe","Ana");
        
        for($c=0;$c<count($alumnos);$c++){
            echo "$alumnos[$c]<br>";            
        }
        
        foreach($alumnos1 as $alumno){
            
            echo "$alumno<br>";
        }
        
        ?>
    </body>
</html>
