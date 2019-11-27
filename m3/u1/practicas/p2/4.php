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
       $dias[0] = 'Lunes';
       $dias[1] = 'Martes';
       $dias[2] = 'Miércoles';
       $dias[3] = 'Jueves';
       $dias[4] = 'Viernes';
       $dias[5] = 'Sábado';
       $dias[6] = 'Domingo';
       
       echo $dias[0] , $dias[4];
       
        ?>
        
         <?php
       $dias[] = 'Lunes';
       $dias[] = 'Martes';
       $dias[] = 'Miércoles';
       $dias[] = 'Jueves';
       $dias[] = 'Viernes';
       $dias[] = 'Sábado';
       $dias[] = 'Domingo';
       
       echo $dias[0] , $dias[4];
       
        ?>
    </body>
</html>
