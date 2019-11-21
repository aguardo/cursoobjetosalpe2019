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
        $numeros = [ 8 , 6 ];
        
        
        if($numeros[0] > $numeros[1]){
            
            print "a es mayor que b <br>";
            $numeros[1] = $numeros[0];
            
        }
        
        
        if($numeros[0] > $numeros[1]):
            print " A es mayor que B <br>";
        endif;
        
        if($numeros[0] > $numeros[1]) {
            print " a es mayor que b <br>";
        }elseif ($numeros[0] == $numeros[1]){
            print " a es igual que b <br>";
            
        } else 
            
            print " b es mayor que a";
            
            
            
        if($numeros[0] > $numeros[1]):
            print " A es mayor que B <br>";
            print "...";
        elseif ($numeros[0] == $numeros[1]):
            print "A es igual que B<br>";
            print "!!!";
        else:
            print "B es mayor que A <br>";
        endif;   
        
        
        
        
        ?>
    </body>
</html>
