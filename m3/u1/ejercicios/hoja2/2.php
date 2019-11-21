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
            $entero=10;
            $cadena="hola";
            $real=23.6;
            $logico=TRUE;
            
            var_dump($entero);
            var_dump($cadena);
            var_dump($real);
            var_dump($logico);
            
            $logico = (int) $logico;
            $entero = (float) $entero;
            settype($logico,"int");
            
            var_dump($entero);
            var_dump($cadena);
            var_dump($real);
            var_dump($logico);
                    
             
            
        ?>
    </body>
</html>
