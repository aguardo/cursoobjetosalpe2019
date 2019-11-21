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
        $dia = "hoy";
        switch($dia){
            case "Lunes":
                echo "Hoy es Lunes";
                break;
            
            case "Martes":
                echo "Hoy es Martes";
                break;
            
            case "Miercoles":
                echo "Hoy es Miercoles";
                break;
            
            case "Jueves":
                echo "Hoy es Jueves";
                break;
            
            case "Viernes":
                echo "Hoy es Viernes";
                break;
            
            case "Sabado":
                echo "Hoy es Sabado";
                break;
                
            case "Domingo":    
                echo "Hoy es Domingo";
                break;
            
            default:
                echo "No se";
                
        }
        ?>
    </body>
</html>
