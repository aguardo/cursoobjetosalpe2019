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
        <p>Vamos a colocar en la pagina web los numeros del 1 al 10
        <?php
            for($c=1;$c<11;$c++)
            {
                echo "<hr>$c";
            }
        
        ?>
        
        
        <hr> Vamos a mostrar los pesos de cada uno de los alumnos
        <?php
        // put your code here
            $pesos = array("jaime" => 100, "Jose" => 80, "ana" => 75)
        ?>
        </p>
        <table>
            <tr>
                
            <?php
                foreach($pesos as $indice => $valor){
            ?>                         
           
                <td><?php echo $indice; ?></td>
                
             <?php
                }
             ?>   
                
            </tr>
            <tr>
               <?php 
                  foreach($pesos as $indice => $valor){
                      
                      echo "<td> $valor </td>";        
                  }
                ?>  
            </tr>
        </table>
        
        
        
        
    </body>
</html>
