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
       <div>
            <ul>
                
                <?php
                    for($c=1;$c<=7;$c++){
                        echo '<li>
                                <a href="'. $this->crearRuta(["accion"=>"ejercicio".$c]).'" > Ejercicio'.$c.'
                                </a>
                             </li>';
                        
                    } 
                
                ?>
                             
            </ul>
        </div>
  

    </body>
</html>